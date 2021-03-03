# CS 42700 Project 3: Building a Python botnet
<Brandon Cocanig>
<3/4/2019 11:59:59>

# NAME
netshell.py

## USAGE
./netshell.py

## DESCRIPTION
netshell.py is a program that is designed to be placed by another program named botinstall.py. Once the program is placed and started the user can uses protocols such as telnet to connect to the new bots by sending commands and receiving outputs. 

## COMMAND-LINE OPTIONS
This program does not accept ant command line options

## INPUT FILE FORMAT
No file input needed

## KNOWN BUGS AND LIMITATIONS
None that I know of.
## ADDITIONAL NOTES
None.
----------------------------------------
# NAME
botinstall.py

## USAGE
./botinstall.py

## DESCRIPTION
botinstall.py is a program that is design to be fed a lists of hosts, users, and passwords. it will then use this information to activate both a stfp connection and a ssh connection, with the end goal being to install and run netshell.py on all working hosts.

## COMMAND-LINE OPTIONS
This program does not accpet ant command line options.

## INPUT FILE FORMAT
This program requires a file named compromised_hosts.txt to be placed in the same directory as the botinstall.py. Inside compromised_hosts.txt each line should contain a host, a user, and a password, in this specified order.

## KNOWN BUGS AND LIMITATIONS
Might get wonky if you do things with the compromised_hosts.txt that you shouldn't.

## ADDITIONAL NOTES
Theres probably a few pexpect checks that really don't need to be there (like some EOF checks),but it causes no issues and only helps in checking errors without crashing.

Another thing i found weird, was when i was inside the schools wifi, the program takes a good amount of time to check each host. Yet, on every other network ive done it on, each host runs within seconds.
	
i also could have changed the pexpect timeout amount to speed up the detection of hosts that are down, but i didn't in case it caused a up host to be mistaken as down for taking to long.
----------------------------------------
# NAME
candc.py

## USAGE
./candc.py

## DESCRIPTION
candc.py is a program that is design to act as the command and control for a list of botted hosts. Once the hosts have been loaded from the bottedhosts.txt, candc.py will transmist any basic shell commands and recive the output from the botnet.

## COMMAND-LINE OPTIONS
This program does not accept ant command line options.

## INPUT FILE FORMAT
This program requires a file named bottedhosts.txt to be placed in the same directory as the candc.py. bottedhosts.txt can be created by running a different program botinstall.py.

## KNOWN BUGS AND LIMITATIONS
the whole thing is a full of bugs
## ADDITIONAL NOTES
well mostly because it doesn't work. I did try to figure it out how to make it, but I ended up running out of time.
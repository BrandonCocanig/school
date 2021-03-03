CS 42700 Project 2: Brute-force SSH login
<Brandon Cocanig>
<2/19/2019 11:59:59>

NAME
    sshbrute.py

USAGE
    ./sshbrute.py <-f filename|-g> <host> <username>

DESCRIPTION
    The main use of this program is to allow the use SSH to brute force weak passwords. It has two sepreat modes, one that allows you to enter a password list. The other mode generates every possible three letter combonation to act as the password list.

COMMAND-LINE OPTIONS
    -f enters file selction mode, allows you to enter a password list
	
	-g enter generate mode, generates all possible three charater combonations

INPUT FILE FORMAT
    .../top1000passwordlist.txt
		please enter the correct path to the desired list.

KNOWN BUGS AND LIMITATIONS
Im sure there might be a bug or two, but during my tests i didnt find anything.
ADDITIONAL NOTES
    The only thing i would fix would be the fact that when the program spawns a new shell it doesnt test the last password, but it says it tried. This isnt true, it will just skip that password. In order to fix this i just had it redo the last password when it spawns a new connection. This is only a samll issue but it causes it to say its trying the same password. But then again its not a big deal.
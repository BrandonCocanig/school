CS 42700 Project 1: Bash Port Scanner
<Brandon Cocanig>
<2/5/2019>

NAME
    Portscanner.sh -scans ports and pings hosts

USAGE
portscanner.sh [-t timeout] [host startport stopport],

DESCRIPTION
    <paragraph describing purpose and function of the program, also
     detailing the output, it will give> This simple program is made up of two primary function. The host scanning function will send pings and check if a given host is currently up or down. The port scanning function will scan a given range of TCP ports, checking if they are open or closed.

COMMAND-LINE OPTIONS
    -t timeout- allows the changing of the duration of a scan. Default is 2s unless changed.

INPUT FILE FORMAT
   This program allows text files to be used allowing multiple hosts, and port ranges to be scanned. To enter batch mode cat the output of a txt file. The structure of this input file should follow this example.
[Host
Starting port
Ending port
Host
Starting.....etc]

KNOWN BUGS AND LIMITATIONS
Since -t is the only possible option, I didn’t bother to check to see if anything other than a -t is there, the code will just read the number in the position after the option. But this causes no issues because of the argument number check not allowing any weird amount of argument to be entered.

ADDITIONAL NOTES
    At first, I thought I would never get this to work right, but after I took each task bit by bit. I found that it was actually easier than I thought it would be. The code definitely has as much spaghetti as an Italian restaurant. Everything works to the grading standard and should cover all the points listed in the project 1 doc.


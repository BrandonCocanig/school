#By; Brandon Cocanig 10/01/18
# purpose gen 100 random numbers then sort them
from random import randint # grab the random integer generator from the random library
i = 0
my_list = []
for i in range(100): # will make it loop range(n) amount of times
    x = randint(0, 9) # will random an integer between 0 and 9
    my_list.append(x) # appends x to the already created my_list
my_list.sort() # sorts from lowest to highest number
print(my_list) # prints sorted my_list
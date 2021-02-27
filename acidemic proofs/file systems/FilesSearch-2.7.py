# Author: Brandon Cocanig
# File name: filesSearch
# Name: Programming Assignment 3
# Due: 2019-April-30
# Python 2.7
import os
def filesSearch(path, search):
    if os.path.exists(path):
        if os.path.islink(path):
            pass
        elif os.path.isfile(path):
            fname = os.path.split(path)[1]
            # checks the name against your search term and if it contains it it will
            if fname.startswith(search):
                print(fname)
        elif os.path.isdir(path):
            for file in os.listdir(path):
                filesSearch(os.path.join(path, file), search)



# get the folder location, and the seacher term from the user
path = raw_input("what dir do you want to search? (c:\\tmp)")
search = raw_input("Search for files that start with? (test)")
# search = "test"
#path = 'c:\\tmp'
filesSearch(path, search)


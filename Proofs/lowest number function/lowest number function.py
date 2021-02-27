def minGet(arr): # this fuctions whole point to to get the min number, by comparing each num to the curret lowest, until the real lowest is found
    minnumber = arr[0] # sets the first number to the lowest, becuase we dont know what the real lowest is
    for i in range(len(arr)): # loops through the list until each number has been compared
        if arr[i] < minnumber:
            minnumber = arr[i]
    return minnumber # gives the true lowest number


arr = []

innums = int(input("how many numbers do you want to input")) # asks the user how many nums are going to be in the list
i=0
while i < innums: # loops to let the user enter all the numbers
    arr.append(int(input("enter a num")))
    i=i+1
minnumber = minGet(arr) # calls the function to find the lowest number in the given List
print("the lowest number entered was", minnumber)

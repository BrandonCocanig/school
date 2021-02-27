# Author: Brandon Cocanig

# function to find the gcd, accepts two numbers should be ints
def gcd(m, n):
    holder = []
    i = 1
    r = m % n  # checking what the Remainder is between the division of the two ints
    while r != 0:  # keep going until the Remainder comes up as zero
        i = i + 1
        m = n  # make m become n
        n = r  # make n become R
        r = m % n
    holder.append(n)
    holder.append(i)
    return holder  # when the while loop is done return the value in n


input1 = int(input("enter your first number"))
input2 = int(input("enter your second number"))
print("GCD of", "(", input1, ",", input2, ")", "is:")
resultsarray = gcd(input1, input2)
print(resultsarray[0])
print("it took", resultsarray[1], "iterations for this gcd")

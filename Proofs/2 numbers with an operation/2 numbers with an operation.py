# Author: Brandon Cocanig
# File name:2 numbers with an operation.py
# Assignment: Homework 1: Data Storage and Computer Arithmetic
# Due: 2019-Sept-2
print("Please enter your two numbers")
num1 = int(input("Enter The First Number: "))
num2 = int(input("Enter The Second Number: "))
choice = input("Please enter your operation [+ -]")


if choice == "+":
    result = num1 + num2
elif choice == "-":
    result = num1 - num2
else:
    print("You operation was not found.")

# python 3 doesnt have a max int but if this was c the max would be +2147483647 and the min would be -2147483648
# so this would simulate a similar limit

max_over = 2147483647
min_over = -2147483648
if result > max_over or result < min_over:
    print("Your number has overflown the limited, please enter smaller numbers.")
else:
    print("your result is:")
    print(result)

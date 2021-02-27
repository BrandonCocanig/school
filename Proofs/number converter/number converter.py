#    Ask a user for a number (in decimal) to be converted to
#    Ask a user which number system he/she wants the number to be converted to (B, O, H?)
#    Display the number in that system/format
#    Using Functions is preferred since we have been talking about it but it's not required. You can do it with If statements if you like.

# Pick a number
num = int(input("Enter a number: "))

# Pick number system
num_sys = input("Enter a number system: bin, hex, oct, dec ")

if num_sys == "bin":  # if user inputted bin
    print(bin(num), "in bin.")
elif num_sys == "oct":  # if user inputted oct
    print(oct(num), "in oct.")
elif num_sys == "hex":  # if user inputted hex
    print(bin(num), "in hex.")
elif num_sys == "dec":  # if user inputted dec
    print(num, "in dec.")
else:
    print("try again")  # if bin hex or oct was not chosen


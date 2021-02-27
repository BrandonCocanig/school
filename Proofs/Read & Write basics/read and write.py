# how to read only certain amount of file?
with open('test.txt', 'r') as f:
    f_contents = f.read(10)    # 10 characters only
    print(f_contents, end='')
    f_contents = f.read(10)    # picks it up the pointer location!
    print(f_contents, end='')

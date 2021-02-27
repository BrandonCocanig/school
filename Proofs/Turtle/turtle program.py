import turtle               # allows us to use the turtles library
def __init__(self):
    """Turtle Constructor"""
    turtle.Turtle.__init__(self, shape="turtle")

def square

def triangle

def circle

    shape_input = input("Square Triangle or Circle?")
    if shape_input = "Square"
        print(1)
    elif shape_input = "Triangle"
        print(1)
    elif shape_input = "Circle"
        print(1)
# turtle graphics - square
wn = turtle.Screen()        # creates a graphics window
alex = turtle.Turtle()      # create a turtle named alex
alex.forward(100)           # tell alex to move forward by 150 units
alex.left(90)               # turn by 90 degrees
alex.forward(100)           # complete the second side of a rectangle
alex.left(90)
alex.forward(100)
alex.left(90)
alex.forward(100)

# turtle graphics - can you draw a triangle?
wn = turtle.Screen()        # creates a graphics window
alex = turtle.Turtle()      # create a turtle named alex
alex.forward(100)           # tell alex to move forward by 150 units
alex.left(120)               # turn by 90 degrees
alex.forward(100)           # complete the second side of a rectangle
alex.left(120)
alex.forward(95)

# turtle circle
wn = turtle.Screen()
myTurtle = turtle.Turtle()
myTurtle.circle(100)
wn.exitonclick()

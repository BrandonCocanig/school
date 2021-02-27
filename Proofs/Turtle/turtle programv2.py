import turtle               # allows us to use the turtles library


def __init__(self):
    """Turtle Constructor"""
    turtle.Turtle.__init__(self, shape="turtle")


def draw_square():
    wn = turtle.Screen()        # creates a graphics window
    alex = turtle.Turtle()      # create a turtle named alex
    alex.color("blue")
    alex.forward(100)           # tell alex to move forward by 150 units
    alex.left(90)               # turn by 90 degrees
    alex.forward(100)           # complete the second side of a rectangle
    alex.left(90)
    alex.forward(100)
    alex.left(90)
    alex.forward(100)
    wn.exitonclick()


def draw_triangle():
    wn = turtle.Screen()        # creates a graphics window
    alex = turtle.Turtle()      # create a turtle named alex
    alex.color("red")
    alex.forward(100)           # tell alex to move forward by 150 units
    alex.left(120)               # turn by 90 degrees
    alex.forward(100)           # complete the second side of a rectangle
    alex.left(120)
    alex.forward(100)
    wn.exitonclick()


def draw_circle():
    wn = turtle.Screen()
    myTurtle = turtle.Turtle()
    myTurtle.color("green")
    myTurtle.circle(50)
    wn.exitonclick()


shape_input = input("Square Triangle or Circle?")
if shape_input == "Square":
        draw_square()
elif shape_input == "Triangle":
        draw_triangle()
elif shape_input == "Circle":
        draw_circle()

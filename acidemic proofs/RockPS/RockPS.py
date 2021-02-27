#By; Brandon Cocanig 9/11/18
#purpose rock paper scissors game

#import random integer so computer can grab a random number
from random import randint


#set initial TurnCounter to 1 and both wins set to 0
TurnCounter = 1
HWins = 0
CWins = 0

#game will keep repeating until  turn 7 is over
while TurnCounter < 8:
    # grab the players choice and convert the number into a playable move
    PlayerPlay = int(input("Enter 0=rock, 1=paper, 2=scissors:"))
    if PlayerPlay == 0:
        PlayerPlay = "rock"
    elif PlayerPlay == 1:
        PlayerPlay = "paper"
    elif PlayerPlay == 2:
        PlayerPlay = "scissors"

    # grab the computers play and convert the number into a playable move
    ComputerPlay = (randint(0, 2))
    if ComputerPlay == 0:
        ComputerPlay = "rock"
    elif ComputerPlay == 1:
        ComputerPlay = "paper"
    elif ComputerPlay == 2:
        ComputerPlay = "scissors"

    # show both plays for testing purpose
    print(PlayerPlay, " vs ", ComputerPlay)

    # if the computer pick is the same as player pick
    if PlayerPlay == ComputerPlay:
        print("that was a draw")

#calculate who won
    # if the player picks rock
    elif PlayerPlay == "Rock":
        if ComputerPlay == "Scissors":
            print("Rock beats Scissors you win")
            HWins += 1
        else:
            print("Paper beats paper you lost")
            CWins += 1


    # if the player picks paper
    elif PlayerPlay == "paper":
        if ComputerPlay == "rock":
            print("Paper beats rock you win")
            HWins += 1
        else:
            print("Scissors beats paper you lost")
            CWins += 1


    # if the player picks scissors
    elif PlayerPlay == "scissors":
        if ComputerPlay == "paper":
            print("scissors beats paper you win")
            HWins += 1
        else:
            print("rock beats scissors you lost")
            CWins += 1


    print("That was turn", TurnCounter, "of seven")


    #used to count for the while loop
    TurnCounter += 1
#end game part
if HWins == CWins:
    print("You Won with", HWins, "points to computer's", CWins, "points.")
elif HWins > CWins:
    print("You Won with", HWins, "points to computer's", CWins, "points.")
else:
    print("You Lost with", HWins, "points to the computer's", CWins, "points.")
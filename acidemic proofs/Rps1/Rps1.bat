@ECHO off
Rem **************
Rem ***************
Rem Script Name rps.bat
Rem author: Brandon Cocanig
Rem Date 4/23/14
Rem
Rem This is a windows shell script implementation of the popular
Rem child's game called "rock, paper, scissors."
Rem
Rem ***************
Rem script initialization section **********
Rem display the name of the gaame i the windows command console's title bar
TITLE = R o c k, P a p e r, S c i s s o r s 

Rem SET the color schem to yellow on black
COLOR 0b
Rem define globally used variables
SET /a NoWins = 0
SET /a NoLosses = 0
SET /a NoTies = 0
SET /a NoInvalid = 0

Rem ******** Main Processing section ***********

Rem Call the procedure that displays the main menu

CALL :DisplayMenu
rem This label provides a callable marker for restarting the game
:StartAgain

rem Call the procedure that collects the player's choice
CALL :CollectChoice

rem call the procedure that randomly determines the computer's choice
CALL :GetComputerChoice

rem Call the procedure that determines if the player won, lost or tied
CALL :CompareChoices

rem Call the procedure that checks for an invalid choice 
CALL :CheckForInvalid

rem Call the procedure that displays the results of the game
CALL :DisplayResults

Rem analyze the player's responce and either start a new game or display
Rem game statistics (assume An N IF response is anything but =Y or =y)

IF /I "%responce:~,1%" EQU "y" (
	GOTO :StartAgain 
)   Else (
	CALL :DisplayStats
	GOTO :EOF
	
	)
	Rem Terminate the script's execution
	
	GOTO :EOF
	
	Rem ********* Procedure section ******
	
	Rem This Procedure displays the game's main menu

	:DisplayMenu

Rem Clear the display
cls
Rem Add three lines blank lines to display
	FOR /L %%1 in (1,1,2) DO ECHO.
ECHO           welcome to
ECHO.
ECHO           Rock, Paper, Scissors
ECHO.
ECHO.
ECHO.
ECHO Rules:
ECHO.
ECHO 1. Guess the same thing as the computer to tie
ECHO.
ECHO 2. paper covers rock to win
ECHO.
ECHO 3. Rock brecks scissors to win
ECHO.
ECHO 4. scissors cuts paper to win

Rem Add five lines blank lines to display

	FOR /L %%1 IN (1,1,5) DO ECHO.
	
Rem make the player press a key to continue

pause

GOTO :EOF

	rem this collects the players choice
:CollectChoice 
	
	Rem define variables needed to store and analyze the player's response
SET answer="No Answer"
SET response=N
SET results=None
	
	rem Clear the display
	CLS
	
	Rem Add eghit lines blank lines to display
	FOR /L %%1 IN (1,1,8) DO ECHO.
	
	rem ask player to make theri choice
	
SET /p answer= Type rock, paper, or scissors : 

GOTO :EOF
	
	Rem THis random choice
	
:GetComputerChoice
	
	Rem get a number
	
SET GetRandomNumber=%random%
	
	Rem IF the Random number is greater than 22,000. the computer picked rock
	
IF %GetRandomNumber% GTR 22000 (
	SET CardImage=rock
	GOTO :Continue
	)
	
	Rem IF the Random number is greater than 11,000. the computer picked Scissors
	
IF %GetRandomNumber% GTR 11000 (
	SET CardImage=scissors
	GOTO :Continue
	)
	
	Rem Otherwise, assign paper as the computers choce
	
SET CardImage=paper
	
	Rem this lable is used to skip unncessary conditional test in this procedure
	
:Continue

GOTO :EOF
	
	Rem This procedure determines IF a plater won, lost or tied
	
:CompareChoices
	
	Rem When the player selected rock
	
	IF /I %answer% == rock (
		IF %CardImage% == rock (
			SET results="You Tie"
			SET /a NoTies = NoTies + 1
		) 
		IF %CardImage% == scissors (
			SET results="You Win"
			SET /a NoWins = NoWins + 1
			)
			IF %CardImage% == paper (
			SET results="You lose"
			SET /a NoLosses = NoLosses + 1
			)
		)
		
		Rem Compare Choices when the player selected scissors
		
		IF /I %answer% == scissors (
		IF %CardImage% == rock (
			SET results="You lose"
			SET /a NoLosses = NoLosses + 1
		) 
		IF %CardImage% == scissors (
			SET results="You Tie"
			SET /a NoTies = NoTies + 1
			)
		IF %CardImage% == paper (
			SET results="You lose"
			SET /a NoWins = NoWins + 1
			)
		)
		Rem Compare Choices When the player selected Paper
		
		IF /I %answer% == paper (
		IF %CardImage% == rock (
			SET results="You Win"
			SET /a NoWins = NoWins + 1
		) 
		IF %CardImage% == scissors (
			SET results="You Lose"
			SET /a NoLosses = NoLosses + 1
			)
		IF %CardImage% == paper (
			SET results="You Tie"
			SET /a NoTies = NoTies + 1
			)
		)
		
	GOTO :EOF
	
	Rem Keep a count of the total number of invalid player choices
	
	:CheckForInvalid
	
	IF %results%=="None" (
	Rem Cls
	cls
	
	rem count of total number of invalid player choices
SET /a NoInvalid = NoInvalid + 1
	
	Rem Add three lines blank lines to display
	FOR /L %%1 IN (1,1,3) DO ECHO.
	ECHO Sorry. your answer was not recongnized
	
	ECHO.
	ECHO Use All lower case when enter your choice
	
	Rem Add four blank lines to the display
	
	FOR /L %%1 IN (1,1,4) DO ECHO.
	
	Rem make the player press a key to continue
	
	pause
	
	)
	
	GOTO :EOF
	
	Rem this procedure displays the results of the game
	
	:DisplayResults
	
	Rem Clear the Display
	
	CLS
	
	Rem Add Three Blank Lines to the display
	
	FOR /L %%1 IN (1,1,4) DO ECHO.
	ECHO Game Results
	ECHO.
	ECHO ---------------------------------
	ECHO.
	ECHO You Picked:	%answer%
	ECHO.
	ECHO The Computer Picked: %CardImage%
	ECHO.
	ECHO ---------------------------------
	ECHO.
	ECHO	Results:	%results%
	Rem add nine blank lines to the display
	
	FOR /L %%1 IN (1,1,9) DO ECHO.
	Rem ask the player whether he would like to play another game
	
	SET /p responce=Play another round (y/n)?
	
	GOTO :EOF
	
	Rem this procedure displays game stats
	:DisplayStats
	
	Rem Clear the display
	cls
	
	Rem Add Three blank linnes to the display
	FOR /L %%1 IN (1,1,3) DO ECHO.
	
	ECHO Game Statistics
	ECHO.
	ECHO -------------------------------------
	ECHO.
	ECHO	Category		Results
	ECHO.
	ECHO -------------	---------------
	ECHO.
	ECHO No. of ties		%NoTies%
	ECHO.
	ECHO No. of wins		%NoWins%
	ECHO.
	ECHO No. of ties		%NoLosses%
	ECHO.
	ECHO No. of Invalid		%NoInvalid%
	ECHO.
	ECHO --------------------------------------
	Rem add four blank lines to the display
	
	FOR /L %%1 IN (1,1,4) DO ECHO.
	
	pause
	
	GOTO :EOF
@echo off
rem script name: Tic tac toe ttt.bat
rem author: Brandon Cocanig
rem date 11/16/2016
rem this is a windows shell script for the game tic tac toe
rem *************************
rem *************************
rem Script initi section
COLOR 0E
rem display 
TITLE = TIC TAC TOE
cls
rem Main processing section
rem called when game need to restart
rem **********
:StartOver
Rem global variables
SET Player=X
SET Winner=None
SET /A NoMoves=0
SET /A NoMoves=0
REM Reset all squares to blank
CALL :InitializeBlanks
REM Display welcome screen
CALL :welcome

rem player instrictions

REm Cls

IF /I "%reply%"==" " GOTO :StartOver
IF /I "%reply%"==** GOTO :StartOver
IF /I %reply%==Play CLS & CALL :Play
IF /I %reply%==Quit GOTO :EOF
IF /I %reply%==Help CALL :Help
IF /I %reply%==About CALL :About
GOTO :StartOver
GOTO :EOF

rem reset all the squares to show blanks
:InitializeBlanks
SET A1= 
SET A2= 
SET A3= 

SET B1= 
SET B2= 
SET B3= 

SET C1= 
SET C2= 
SET C3= 
GOTO :EOF
:Welcome

CLS

FOR /L %%1 IN (1,1,8) DO ECHO.
ECHO              W E L C O M E  T O  T I C  T A C  T O E
ECHO.
ECHO.
ECHO                   WINDOWS SHELL SCRIPT STYLE!!

FOR /L %%1 IN (1,1,9) DO ECHO.
REM Display a menu to make a selection
ECHO Options:         [Play] [Quit] [Help] [About]
ECHO.

SET /P reply=Enter selection:
GOTO :EOF

:DisplayBoard
CLS
ECHO.
ECHO.
ECHO                              T I C  T A C  T O E
ECHO.
ECHO.
ECHO.
ECHO                1       2       3
ECHO                                             Rules
ECHO                    ^|       ^|              1. Player X always goes first
ECHO     A           %A1%  ^|   %A2%   ^|   %A3%
ECHO             _______^|_______^|______        2. To make a move enter the
ECHO                    ^|       ^|                 coordinates of the appropriate
ECHO     B           %B1%  ^|   %B2%   ^|   %B3%              square.
ECHO             _______^|_______^|______
ECHO                    ^|       ^|              3. Remember to switch turns
ECHO     C           %C1%  ^|   %C2%   ^|   %C3%              when instructed by the game
ECHO                    ^|       ^|   
ECHO.
ECHO.
ECHO       Player %player%'s turn:
ECHO.
GOTO :EOF

:HELP
cls
FOR /L %%1 IN (1,1,5) DO ECHO.
ECHO        HELP Instructions
ECHO.
ECHO.
ECHO This is a text based implementation of the TIC-TAC-TOE game.  In this game
ECHO the computer controls the action. Player X always goes first. The game
ECHO tells each player when it is their turn. When prompted to take a turn, players
ECHO must type the coordinates of the square into which they wish to place their
ECHO marker (the X or O characters). For example, to place a marker in the
ECHO upper left hand box, players would enter A1.
ECHO.
ECHO The game tracks the progress of each game and will automatically determine
ECHO when a game has been won, lost, or tied.

FOR /L %%1 IN (1,1,6) DO ECHO.

pause
GOTO :EOF

:About
CLS
FOR /L %%1 IN (1,1,7) DO ECHO.
ECHO                          About the TIC TAC TOE game
ECHO.
ECHO.
ECHO                                Written by
ECHO                             Brandon Cocanig
ECHO.
ECHO              ____________________________________________________
ECHO.
ECHO                              Copyright 2016
FOR /L %%1 IN (1,1,7) DO ECHO.
pause
GOTO :EOF

rem acutal controls of the game
:Play

IF "%Winner%"=="X" (
   CALL :DisplayGameResults
   pause
   GOTO :StartOver
)
IF "%Winner%"=="O" (
   CALL :DisplayGameResults
   pause
   GOTO :StartOver
)	
IF "%Winner%"=="Nobody" (
   CALL :DisplayGameResults
   pause
   GOTO :StartOver
)
CALL :DisplayBoard
SET /P response=Select a box:
CALL :ValidateResponse
ECHO Validate Response
	
IF %ValidMove%==True (
SET /A NoMoves = NoMoves +1
	
CALL :FillInSquare
) ELSE (
CLS
FOR /L %%1 IN (1,1,11) DO ECHO.
ECHO                 Invalid move please try again
pause
)
IF %NoMoves%==9 (
   SET Winner=Nobody
) ELSE (
   CALL :SeeIfWon
)
IF %ValidMove%==True (
   IF "%player%"=="X" (
      SET Player=O
) ELSE (
SET Player=X
)
)
GOTO :Play
GOTO :EOF
:ValidateResponse

SET ValidMove=True
IF /I "%response%" ==" " (
   SET ValidMove=False
   GOTO :EOF
)
IF /I "%response%" == ** (
   SET ValidMove=False
   GOTO :EOF
)
IF /I NOT %response%==A1 (
 IF /I NOT %response%==A2 (
  IF /I NOT %response%==A3 (
   IF /I NOT %response%==B1 (
    IF /I NOT %response%==B2 (
     IF /I NOT %response%==B3 (
      IF /I NOT %response%==C1 (
       IF /I NOT %response%==C2 (
        IF /I NOT %response%==C3 (
          SET ValidMove=False
          GOTO :EOF
         )
        )
       )
      )
     )
    )
   )
  )
 )
IF /I %response%==A1 (
  IF not "%A1%"==" " (
     SET ValidMove=False
)
)
IF /I %response%==A2 (
  IF not "%A2%"==" " (
     SET ValidMove=False
)
)
IF /I %response%==A3 (
  IF not "%A3%"==" " (
     SET ValidMove=False
)
)
IF /I %response%==B1 (
  IF not "%B1%"==" " (
     SET ValidMove=False
)
)
IF /I %response%==B2 (
  IF not "%B2%"==" " (
     SET ValidMove=False
)
)
IF /I %response%==B3 (
  IF not "%B3%"==" " (
    SET ValidMove=False
)
)
IF /I %response%==C1 (
  IF not "%C1%"==" " (
     SET ValidMove=False
)
)
IF /I %response%==C2 (
  IF not "%C2%"==" " (
     SET ValidMove=False
)
)
IF /I %response%==C3 (
  IF not "%C3%"==" " (
     SET ValidMove=False
)
)
ECHO %response%
GOTO :EOF
:FillInSquare
IF /I %response%==A1 SET A1=%player%
IF /I %response%==A2 SET A2=%player%
IF /I %response%==A3 SET A3=%player%

IF /I %response%==B1 SET B1=%player%
IF /I %response%==B2 SET B2=%player%
IF /I %response%==B3 SET B3=%player%

IF /I %response%==C1 SET C1=%player%
IF /I %response%==C2 SET C2=%player%
IF /I %response%==C3 SET C3=%player%
GOTO :EOF
:DisplayGameResults
CLS
SET messagetext=Tie - No Winner

IF "%Winner%"=="X" SET messagetext=Player X won!!!
IF "%Winner%"=="O" SET messagetext=Player O won!!!
FOR /L %%1 IN (1,1,5) DO ECHO.

ECHO                   ^|      ^|            E N D  O F  G A M E
ECHO                %A1%  ^|  %A2%   ^|  %A3%
ECHO             ______^|______^|______
ECHO                   ^|      ^|
ECHO                %B1%  ^|  %B2%   ^|  %B3%        %messagetext%
ECHO             ______^|______^|______
ECHO                   ^|      ^|
ECHO                %C1%  ^|  %C2%   ^|  %C3%
ECHO                   ^|      ^|
FOR /L %%1 IN (1,1,9) DO ECHO.
GOTO :EOF
:SeeIfWon
IF /I "%A1%"=="%player%" (
IF /I "%A2%"=="%player%" (
IF /I "%A3%"=="%player%" (SET Winner=%player%)
)
)
IF /I "%B1%"=="%player%" (
IF /I "%B2%"=="%player%" (
IF /I "%B3%"=="%player%" (SET Winner=%player%)
)
)
IF /I "%C1%"=="%player%" (
IF /I "%C2%"=="%player%" (
IF /I "%C3%"=="%player%" (SET Winner=%player%)
)
)
REM Check diagonally
IF /I "%A1%"=="%player%" (
IF /I "%B2%"=="%player%" (
IF /I "%C3%"=="%player%" (SET Winner=%player%)
)
)
IF /I "%A3%"=="%player%" (
IF /I "%B2%"=="%player%" (
IF /I "%C1%"=="%player%" (SET Winner=%player%)
)
)
REM Check up and down
IF /I "%A1%"=="%player%" (
IF /I "%B1%"=="%player%" (
IF /I "%C1%"=="%player%" (SET Winner=%player%)
)
)
IF /I "%A2%"=="%player%" (
IF /I "%B2%"=="%player%" (
IF /I "%C2%"=="%player%" (SET Winner=%player%)
)
)
IF /I "%A3%"=="%player%" (
IF /I "%B3%"=="%player%" (
IF /I "%C3%"=="%player%" (SET Winner=%player%)
)
)
GOTO :EOF
rem Brandon Cocanig 8/24/16
cls
echo off
echo ********************************************************
echo **** Brandon's Dos Menu System ****
echo **** 1. List All Of The Files On the C: Hard Drive ****
echo **** 2. Copy Menu.bat to c:                        ****
echo **** 3. Display Menu.Bat To The Monitor             ****
echo **** 4. Create A Single File With All Batch Files   ****

rem Brandon Cocanig Aug-29-16
rem list all files on the c:drive
cls
@echo off
copy c:\batch\menu.bat c:\
pause
cls
menu

rem Brandon Cocanig aug-29-16
cls
@echo off
dir c:\*.*/s/p
pause
cls
menu

rem Brandon Cocanig Aug-29-16
rem list all of the files on the c: drive
cls
@echo off
c:\batch\menu.bat
pause
cls
menu
@echo off
cls
rem dos menu files. attach a single file that contains all of your dos
rem batch files you ceated for the dos menu system. submit them as
rem one file created from an entry (Batch file) on your dos menu. that
rem batch file will look something like this
cls
cd\
cd batch
copy *.bat allmy.txt
echo these are all of my batch files as of aug-29-16>>allmy.txt
type allmy.txt |more
type allmy.txt>com1
cls
menu
these are all of my batch files as of aug-29-16

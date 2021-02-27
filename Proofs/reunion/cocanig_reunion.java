//Author: Brandon Cocanig
//File name: cocanig_reunion.java
//Name: hw12 reunion
//Due: 2019-April-26
import java.io.*;
import java.util.Scanner;
public class cocanig_reunion {
private static String[] FnameEntrie;
private static String[] LnameEntrie;
private static String[] YearEntrie;
private static String[] GuestEntrie;
private static int count;  // how many values I care about
private static int capacity;  // how many names I can store [100]

// puts all the eggs in the correct basket
public static void append(String first, String last, String year, String guest) {
    FnameEntrie[count] = first;
    LnameEntrie[count] = last;
    YearEntrie[count] = year;
    GuestEntrie[count] = guest;
    count = count + 1;
}

// function to print the welcome msg. will auto print
    static void welcome() {
        System.out.println("Welcome to Reunion Planner. This program will help you organize");
        System.out.println("a reunion for your high school. Graduates can be grouped by decade.");
        System.out.println("Graduates of specific years can also be identified so that you can");
        System.out.println("include them in a special way.");
        System.out.println("------------");
    }


// function to print the menu msg. will auto print
    static void showMenu() {
        System.out.println("Heading");
        System.out.println("Here are your options: ");
        System.out.println("1. See full list of alumni sorted by last name");
        System.out.println("2. See list of alumni by decade");
        System.out.println("3. See 10-year reunion alumni");
        System.out.println("4. See 25-year reunion alumni");
        System.out.println("5. See 40-year reunion alumni");
        System.out.println("6. Find alumnus by last name");
        System.out.println("7. Quit");
        System.out.println("8. Wouldn't you prefer a nice game of chess?");
        System.out.print("Enter your choice: ");
        System.out.print("-------------------");
    }

// function to print the entire list.
    static void printList() {
        int attending = 0;
        for (int i = 0; i < count; i++) {
            System.out.printf("%s, %s ,%s, %s\n",LnameEntrie[i],FnameEntrie[i],YearEntrie[i],GuestEntrie[i]);
            if (GuestEntrie[i].equals("y")){
                attending++; // add one for guests
            }
            attending++; // add one for the person
        }
        System.out.println("------------------");
        System.out.println("There are " + attending +" people");
	}


// function to search the entire list for a last name. will come if choice is 6
    public static int FindAlumniByLastName() {
        Scanner sc = new Scanner(System.in); 
        System.out.print("Enter last name of the persion you want to find: (Rummel)");
        String LastName = sc.nextLine();

        for (int i = 0; i < count; i++) {
			if (LastName.equalsIgnoreCase(LnameEntrie[i])) { // if found
            System.out.println("Yes, " + LnameEntrie[i] + " " + FnameEntrie[i] + ", " + YearEntrie[i] + " is attending");
                return 0; // just to close the function
                }  
            }
            System.out.print("No one with that last name is attending.");
            return 0; // just to close the function
		}


// function to print the list but in a sorted order. will come if choice is 1
    public static void sortByLastName() {
        String min;
		int minPosition;
		String tempLast, tempFirst, tempYear, tempGuest;
		for (int i = 0; i < count; i++) {
			min = LnameEntrie[i];
			minPosition = i;
			for (int j = i+1; j < count; j++) {
				if (LnameEntrie[j].compareTo(min) < 0) {
					min = LnameEntrie[j];
					minPosition = j;
				}
			}
			tempLast = LnameEntrie[i];
            tempFirst = FnameEntrie[i];
            tempYear = YearEntrie[i];
            tempGuest = GuestEntrie[i];

			LnameEntrie[i] = LnameEntrie[minPosition];
            FnameEntrie[i] = FnameEntrie[minPosition];
            YearEntrie[i] = YearEntrie[minPosition];
            GuestEntrie[i] = GuestEntrie[minPosition];
            
			LnameEntrie[minPosition] = tempLast;
            FnameEntrie[minPosition] = tempFirst;
            YearEntrie[minPosition] = tempYear;
			GuestEntrie[minPosition] = tempGuest;
        }
    }


// function to print the . will come if choice is 2
    static void sortByDecade() {
        int tempint;
        int attending;
        String tempstring;
        int[] YearEntrieInt = new int[capacity];
        // I couldn't find a way to get the decades with using some math,
        // so I just convert the year array to an int by building another array
        for (int i = 0; i < count; i++) {
            tempstring= YearEntrie[i];
	        tempint = Integer.valueOf(tempstring);		
            YearEntrieInt[i] = tempint;
        }
        System.out.println("-- 1950 - 1959 --");
        attending = 0;
        for (int i = 0; i < count; i++) {
        if(YearEntrieInt[i] >= 1950 && YearEntrieInt[i]<= 1959) {
            if (GuestEntrie[i].equals("y")){
                attending++;
            }
            attending++;
            System.out.printf("%s, %s ,%s, %s\n",LnameEntrie[i],FnameEntrie[i],YearEntrie[i],GuestEntrie[i]); 
            }
        }
        System.out.println("------------");
        System.out.println("Total People: " + attending); 

        System.out.println("-- 1960 - 1969 --");
        attending = 0;
        for (int i = 0; i < count; i++) {
            if(YearEntrieInt[i] >= 1960 && YearEntrieInt[i]<= 1969) {
                if (GuestEntrie[i].equals("y")){
                    attending++;
                }
                attending++;
                System.out.printf("%s, %s ,%s, %s\n",LnameEntrie[i],FnameEntrie[i],YearEntrie[i],GuestEntrie[i]); 
            }
        }
        System.out.println("------------");
        System.out.println("Total People: " + attending);

        System.out.println("-- 1970 - 1979 --");
        attending = 0;
        for (int i = 0; i < count; i++) {
            if(YearEntrieInt[i] >= 1970 && YearEntrieInt[i]<= 1979) {
                if (GuestEntrie[i].equals("y")){
                    attending++;
                }
                attending++;
                System.out.printf("%s, %s ,%s, %s\n",LnameEntrie[i],FnameEntrie[i],YearEntrie[i],GuestEntrie[i]); 
            }
        }
        System.out.println("------------");
        System.out.println("Total People: " + attending);

        System.out.println("-- 1980 - 1989 --");
        attending = 0;
        for (int i = 0; i < count; i++) {
            if(YearEntrieInt[i] >= 1980 && YearEntrieInt[i]<= 1989) {
                if (GuestEntrie[i].equals("y")){
                    attending++;
                }
                attending++;
                System.out.printf("%s, %s ,%s, %s\n",LnameEntrie[i],FnameEntrie[i],YearEntrie[i],GuestEntrie[i]); 
            }
        }
        System.out.println("------------");
        System.out.println("Total People: " + attending);

        System.out.println("-- 1990 - 1999 --");
        attending = 0;
        for (int i = 0; i < count; i++) {
            if(YearEntrieInt[i] >= 1990 && YearEntrieInt[i]<= 1999) {
                if (GuestEntrie[i].equals("y")){
                    attending++;
                }
                attending++;
                System.out.printf("%s, %s ,%s, %s\n",LnameEntrie[i],FnameEntrie[i],YearEntrie[i],GuestEntrie[i]); 
            }
        }
        System.out.println("------------");
        System.out.println("Total People: " + attending);
        
        System.out.println("-- 2000 - 2009 --");
        attending = 0;
        for (int i = 0; i < count; i++) {
            if(YearEntrieInt[i] >= 2000 && YearEntrieInt[i]<= 2009) {
                if (GuestEntrie[i].equals("y")){
                    attending++;
                }
                attending++;
                System.out.printf("%s, %s ,%s, %s\n",LnameEntrie[i],FnameEntrie[i],YearEntrie[i],GuestEntrie[i]); 
            }
        }
        System.out.println("------------");
        System.out.println("Total People: " + attending);

        System.out.println("-- 2010 - 2019 --");
        attending = 0;
        for (int i = 0; i < count; i++) {
            if(YearEntrieInt[i] >= 2010 && YearEntrieInt[i]<= 2019) {
                if (GuestEntrie[i].equals("y")){
                    attending++;
                }
                attending++;
                System.out.printf("%s, %s ,%s, %s\n",LnameEntrie[i],FnameEntrie[i],YearEntrie[i],GuestEntrie[i]);
            }
        }
        System.out.println("------------");
        System.out.println("Total People: " + attending);
    }
    //note: this function is very unefficent and it this was real it would needs to be redone.
    // but it will do for what the task needs it to.
    

// function to print the . will come if choice is 3-5
    public static void listAlumniFrom(int decade) {
        int tempint;
        int attending;
        String tempstring;
        int[] YearEntrieInt = new int[capacity];
        // I couldn't find a way to get the decades with using some math,
        // so I just convert the year array to an int by building another array
        for (int i = 0; i < count; i++) {
            tempstring= YearEntrie[i];
	        tempint = Integer.valueOf(tempstring);		
            YearEntrieInt[i] = tempint;
        }

        for (int i = 0; i < count; i++) {
            if(2019 - YearEntrieInt[i] == decade) {
                System.out.printf("%s, %s\n",LnameEntrie[i],FnameEntrie[i]);
            }
        }
        System.out.println("------------");
        System.out.println("Congratulations to them!");

    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int choice;
        String fname;
        int count=0;

// all the arrays for main
        capacity = 100;
        FnameEntrie = new String[capacity];
        LnameEntrie = new String[capacity];
        YearEntrie = new String[capacity];
        GuestEntrie = new String[capacity];

            welcome(); // call the welcome hello page
            System.out.println("Enter the name of the alumni database: (reunion.txt)");
            fname = sc.nextLine();
            showMenu(); // calls all the menu options to list
            
            choice = sc.nextInt();//menu is here and user needs to pick an option 1-7
            


            //this section does the file stuff, and shunts everything to the correct array
            try { 
                File file = new File(fname);
                Scanner fsc = new Scanner(file);
                String line;
                String[] parts;
                while(fsc.hasNextLine()){
				    line = fsc.nextLine();
                    parts = line.split(" ");
                    append(parts[0],parts[1],parts[2],parts[3]);
                }
                //fsc.close();
            }
            catch (Exception ex) {
                System.out.println("Something went awry.");
                }
                sortByLastName(); // function sorts it alphabetically by last name
            while (true){ // allows the choices to be looped until exit is made

                if (choice == 1){
                    // already sorted just have to print
                    //sortByLastName();
                    printList();
                }

                if (choice == 2){
                    sortByDecade();
                }

                if (choice == 3){
                    int decade = 10;
                    System.out.println("-- 10 Year Reunion --");
                    listAlumniFrom(decade);
                }

                if (choice == 4){
                    int decade = 25;
                    System.out.println("-- 25 Year Reunion --");
                    listAlumniFrom(decade);
                }

                if (choice == 5){
                    int decade = 40;
                    System.out.println("-- 40 Year Reunion --");
                    listAlumniFrom(decade);
                }

                if (choice == 6){
                    FindAlumniByLastName();
                }

                if (choice == 7){
                    System.out.println("Thank you for using this program.");
                    System.out.println("Have fun at the reunion.");
                    System.out.println("Goodbye");
                    System.exit(0);
                }

                if (choice == 8){
                    //just a joke, doesn't do anything.
                System.out.println("Let's play Global Thermonuclear War");
                System.out.println("The WINNER: NONE.");
                System.out.println("It's a strange game, the only winning move is not to play");

                }
                // this block is to get the users choice again for the next loop
                System.out.println("press enter to go again");
                sc.nextLine();// need two next lines , the first is to clear the /n
                sc.nextLine();
                showMenu(); // calls all the menu options to list
                choice = sc.nextInt();//menu is here and user needs to pick an option 1-7
            }
    }
}
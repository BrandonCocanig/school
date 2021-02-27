//Author: Brandon Cocanig
//File name: CocanigMadLib.java
//Name: hw10_madlibs
//Due: 2019-April-03


import java.util.Scanner;
import java.io.*;
import java.util.Random;
public class CocanigMadLib {
    public static void main(String[] args) {

        // uncomment if you want to use default words, else you have to enter your own.
        // String[] nouns = {"planes", "clowns", "politicians", "computers"};
        // String[] pNouns = {"planes", "clowns", "politicians", "computers"};
        // String[] verbs = {"fly","jump","run","climb"};
        // String[] adjectives = {"happy","melodic","smelly","tall"};
        // String[] adverbs = {"angrily", "facetiously", "quietly", "eerily"};
        
        
     //header
        System.out.println("***** Welcome to Madlibs *****");
        Scanner sc = new Scanner(System.in);
        
        
    //singular nouns --------------------------------
        System.out.println("Enter four singular nouns:");
        String nounsInput = sc.nextLine();
        // have to split by spaces because user is entering it all on one line
        String[] nouns = nounsInput.split(" ");

            
    //plural nouns --------------------------------
        System.out.println("Enter four plural nouns:");
        String pNounsInput = sc.nextLine();
        // have to split by spaces because user is entering it all on one line
        String[] pNouns = pNounsInput.split(" ");


    //verbs --------------------------------
        System.out.println("Enter four verbs:");
        String verbsInput = sc.nextLine();
        // have to split by spaces because user is entering it all on one line
        String[] verbs = verbsInput.split(" ");
        

    //adjectives --------------------------------
        System.out.println("Enter four adjectives:");
        String adjectivesInput = sc.nextLine();
        // have to split by spaces because user is entering it all on one line
        String[] adjectives = adjectivesInput.split(" ");

    //adjectives --------------------------------
        System.out.println("Enter four adverbs:");
        String adverbsInput = sc.nextLine();
        // have to split by spaces because user is entering it all on one line
        String[] adverbs = adverbsInput.split(" ");



        //test, prints all arrays 1-4
        // for (int i = 0; i < 4; i++) {
        //     System.out.println(nouns[i]);
        //     System.out.println(pNouns[i]);
        //     System.out.println(verbs[i]);
        //     System.out.println(adjectives[i]);
        //     System.out.println(adverbs[i]);
        //   }


    //story name --------------------------------
        System.out.println("Enter the name of the story file: (text.txt)");
            String fname = sc.nextLine(); // grab story
            
            // loop for the user doing it more than once
            while (true) {

            // grab story and prep for searching
                try {
                File file = new File(fname);
                Scanner fsc = new Scanner(file);
                String line;
                String[] words;

                while(fsc.hasNextLine()){ 
				    line = fsc.nextLine();
                    words = line.split(" ");
                    for(int i = 0; i < words.length; i++){
                        

                        //i was orginanlly going to use this, (words[i].equals("<nouns>") || words[i].equals("<nouns>.")){
                        // but this causes an issue becuase it will delete the period and you wont know when to replace it
                        // so i will have to have an extra check for each <word> is addition to <word>+a period.

                        //could use some kind of regular expressions in the equal call,
                        // could cahnge the rnd(4) to a var of the length of the array to prevent errors when user doesnt eneter exactly 4 words
                        Random rnd = new Random();

                        if (i == 0) {
                            System.out.println(" "); // when i = 0 it means there should be a line breck, as far as my testing goes this works always.
                        }
                        if(words[i].equals("<noun>")){ // checks if a trigger word is there for us to replace
                            System.out.printf("%s", (String)nouns[rnd.nextInt(4)]); // grabs a random int 1-4 to pull from the array
                            System.out.printf("%s"," "); //adds the needed space

                        }else if (words[i].equals("<noun>.")){
                            System.out.printf("%s", (String)nouns[rnd.nextInt(4)]);
                            System.out.printf("%s",". "); //adds the needed period it replaces


                        } else if (words[i].equals("<nouns>")){
                            System.out.printf("%s", (String)pNouns[rnd.nextInt(4)]);
                            System.out.printf("%s"," ");

                        }else if (words[i].equals("<nouns>.")){
                            System.out.printf("%s", (String)pNouns[rnd.nextInt(4)]);
                            System.out.printf("%s",". ");


                        }else if(words[i].equals("<adv>")){
                            System.out.printf("%s", (String)adverbs[rnd.nextInt(4)]);
                            System.out.printf("%s"," ");

                        }else if(words[i].equals("<adv>.")){
                            System.out.printf("%s", (String)adverbs[rnd.nextInt(4)]);
                            System.out.printf("%s",". ");
                            

                        }else if(words[i].equals("<adj>")){
                            System.out.printf("%s", (String)adjectives[rnd.nextInt(4)]);
                            System.out.printf("%s"," ");

                        }else if(words[i].equals("<adj>.")){
                            System.out.printf("%s", (String)adjectives[rnd.nextInt(4)]);
                            System.out.printf("%s",". ");


                        }else if(words[i].equals("<verb>")){
                            System.out.printf("%s", (String)verbs[rnd.nextInt(4)]);
                            System.out.printf("%s"," "); 

                        }else if(words[i].equals("<verb>.")){
                            System.out.printf("%s", (String)verbs[rnd.nextInt(4)]);
                            System.out.printf("%s",". ");

                        }else{
                            System.out.printf("%s ", (String)words[i]);
                        }
                        

                    }
                }
                System.out.flush();
            } catch (Exception ex) {
                System.out.println("Something went awry.");
            }


                //check if user wants to go again with new random words from their input
                System.out.println("\n"+"Story End...");
                System.out.println("Would you like to generate another one (y or n)?");

                String choice = sc.nextLine();
                if (choice.equals("y")) {
                    System.out.println("Loading Another story.....");

                } else if (choice.equals("n"))  {
                    System.out.println("Thank you for playing. Goodbye");
                    System.exit(0);

                } else {
                System.out.println("Invaild error, please type better. Closing....");
                System.exit(0);
                }
        }
    }
}

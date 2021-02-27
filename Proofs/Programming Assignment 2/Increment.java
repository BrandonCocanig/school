// by:Mauricio Sandoval, Monique Cauty (Elle), & Brandon Cocanig
// Programming Assignment 2
// File Name: Increment.java
// Due: March 29 11:59:59pm
public class Increment implements Runnable {
	SharedStuff stuff;
	String name;
	public Increment(SharedStuff stuff, String name) {
		this.stuff = stuff;
		this.name = name;
	}
	
	public void run(){
		while (true) {
				try {
					stuff.sem.acquire();
					//critical area
					if(stuff.next == "Increment") {
						stuff.num ++;
						System.out.printf("Increment: %s\n", name);
						stuff.next = "Print";
					}
					//critical area finished
					stuff.sem.release();

				}catch (InterruptedException e) {
					
				}
				
		}
	}
}
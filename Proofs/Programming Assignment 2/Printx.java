// by:Mauricio Sandoval, Monique Cauty (Elle), & Brandon Cocanig
// Programming Assignment 2
// File Name: printx.java
// Due: March 29 11:59:59pm
public class Printx implements Runnable {
	SharedStuff stuff;
	String name;
	public Printx(SharedStuff stuff, String name) {
		this.stuff = stuff;
		this.name = name;
	}
	public void run(){
		while (true) {
			
			
				try {
					stuff.sem.acquire();
				
					//critical area
					if(stuff.next == "Print") {
						System.out.printf("%d\n", stuff.num);
						System.out.printf("Printing:  %s\n", name);
						//stuff.temp++;
						stuff.next = "Increment";
						// if you want to slow it down, use this sleep command
						Thread.sleep(1000);
						
						
					
					}
					//critical area finished
					stuff.sem.release();

					
				}catch (InterruptedException e) {
						
				}
		}
			
	}
}
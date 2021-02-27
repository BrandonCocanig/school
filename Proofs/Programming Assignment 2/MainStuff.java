// by:Mauricio Sandoval, Monique Cauty (Elle), & Brandon Cocanig
// Programming Assignment 2
// File Name: MainStuff
// Due: March 29 11:59:59pm
import java.util.concurrent.*;
 
class SharedStuff{
	int num = 0;
	String next = "Print";
	Semaphore sem = new Semaphore(1);
	
}

public class MainStuff {
	
	public static void main(String[] args) {
		SharedStuff shared = new SharedStuff();
		
		//Making the threads
		Thread increment = new Thread(new Increment(shared, "A"));
		Thread printX = new Thread(new Printx(shared, "A"));
		
		//2nd set
		Thread increment2 = new Thread(new Increment(shared, "B"));
		Thread printX2 = new Thread(new Printx(shared, "B"));
		
		//3rd set
		Thread increment3 = new Thread(new Increment(shared, "C"));
		Thread printX3 = new Thread(new Printx(shared, "C"));
		
		try {
		
			//Starting all of the created threads
			increment.start();
			printX.start();
			
			//2nd set
			increment2.start();
			printX2.start();
			
			//3rd set
			increment3.start();
			printX3.start();
			
			//all threads join when telling one to join
			increment.join();
			printX.start();
			increment2.join();
			printX2.start();
			increment3.join();
			printX3.start();
			
		} catch (InterruptedException ie) {}
	}
}
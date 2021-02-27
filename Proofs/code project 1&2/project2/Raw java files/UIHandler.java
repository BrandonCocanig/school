import java.util.Scanner;
import java.util.concurrent.*;


public class UIHandler implements Runnable {
	public void run(){
		


	while (true) {
		System.out.println("Do you want to enter an int or a dub: ");
		Scanner scanner = new Scanner(System.in);
		String choice = scanner.nextLine();
		
		
		
		
		
		
		if (choice.equals("int")) {
		System.out.println("Your entering an interager");
		  int num;

		Scanner user_input = new Scanner( System.in );
		System.out.println(Thread.currentThread().getName() + ": enter the num: ");
		num = scanner.nextInt();
		System.out.println(Thread.currentThread().getName() + ": " + num);

		} else {
		System.out.println("Your entering a dubble");
		  double num;

		Scanner user_input = new Scanner( System.in );
		System.out.println(Thread.currentThread().getName() + ": enter the num: ");
		num = scanner.nextDouble();
		System.out.println(Thread.currentThread().getName() + ": " + num);
		}
		
		
		
		}
	}
}

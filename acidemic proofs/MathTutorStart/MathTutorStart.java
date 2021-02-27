//Brandon Cocanig
//hw9_math_tutor
//due: 3/27/19
import java.util.Scanner;
import java.util.Random;
public class MathTutorStart {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		Random rnd = new Random();
		System.out.println("Heading");
		int choice, op1, op2, resp, ans, correct, problemNum, operand, oneOrZero;
		do {
			correct = 0;  // reset the correct count for this new one
			System.out.println("Here are your options: ");
			System.out.println("1. Addition");
			System.out.println("2. Multiplication");
			System.out.println("3. Mixed");
			System.out.println("4. Exit");
			System.out.print("Enter your choice: ");
			System.out.print("-------------------");
			choice = sc.nextInt();
			if (choice==4){
				System.out.println("Goodbye.....");
				System.exit(0);
			}
			// ask for the number of problems and the max operand
			System.out.print("How many problems?");
			problemNum = sc.nextInt();
			System.out.print("Largest operand?");
			operand = sc.nextInt();
			// adding one to operand. So, what the user type is true and not off by one
			operand = operand + 1;

			for (int i = 0; i < problemNum; i++) {
				op1 = rnd.nextInt(operand);
				op2 = rnd.nextInt(operand);

				if (choice == 1) { 
					// addition
					System.out.printf("%d + %d = ? ",op1,op2);
					resp = sc.nextInt();
					ans = op1 + op2;
					if (resp == ans) {
						System.out.println("Correct!");
						correct = correct + 1;
					} else {
						System.out.println("Incorrect!");
						System.out.println("The correct answer was:" + ans);
					}
					
				} else if (choice == 2) {
					//Multiplication
					System.out.printf("%d * %d = ? ",op1,op2);
					resp = sc.nextInt();
					ans = op1 * op2;
					if (resp == ans) {
						System.out.println("Correct!");
						correct = correct + 1;
					} else {
						System.out.println("Incorrect!");
						System.out.println("The correct answer was:" + ans);
					}

				} else if (choice == 3) {
					// generate a random number 0 or 1 to designate the kind of problem
					// Mixed
					oneOrZero = rnd.nextInt(2);
					if (oneOrZero == 0) {
						//Multiplication
					System.out.printf("%d * %d = ? ",op1,op2);
					resp = sc.nextInt();
					ans = op1 * op2;
					if (resp == ans) {
						System.out.println("Correct!");
						correct = correct + 1;
					} else {
						System.out.println("Incorrect!");
						System.out.println("The correct answer was:" + ans);
					}
					} else {
						System.out.printf("%d + %d = ? ",op1,op2);
					resp = sc.nextInt();
					ans = op1 + op2;
					if (resp == ans) {
						System.out.println("Correct!");
						correct = correct + 1;
					} else {
						System.out.println("Incorrect!");
						System.out.println("The correct answer was:" + ans);
					}
					}
     				
				}
			}
			if (choice != 4) {
			System.out.printf("You got %d correct of %d.\n",correct, problemNum);

			  // have to convert the ints to a double
			double DoubleCorrect=correct*100;
			double DoubleProblemNum=problemNum;
			double average=DoubleCorrect/DoubleProblemNum;

			System.out.printf("%.2f", average);
			System.out.printf("%%"); // adds a % on the end of the average
			System.out.println(""); // blank line just to keep things looking nice
			}
		} while (choice != 4);
	}
}
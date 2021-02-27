#include <iostream>
using namespace std;

int main() {
  int x;
  int myNums[15] = {}; // instalizes the arry for 15 elements
  
  for(int i = 0; i < 15; i++) { // loops 15 times for user input
    cout << "Type a number to go into an array: "; cout << i;cout << " of 14 "; // tells user what to do,
    cin >> x; // Get user input from the keyboard
    myNums[i] = x; // swaps the emppty array slot with the user input
}

  cout << "Your array has the following numbers: ";
  for(int i = 0; i < 15; i++) { // loops 15 times for printing the numbers
    cout << myNums[i]; cout << ", ";
}
  return 0;
}
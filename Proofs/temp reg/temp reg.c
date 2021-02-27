#include <stdio.h>

int main()
{
    // creates the register as ints
    register int a;
    register int b;
    register int *temp;
    
    // fills them with vaules
    a = 25;
    b = 30;

    // swaps a to temp, b to a, and temp to b.
    temp = a;
    a = b;
    b = temp;
    
    // prints out your results
    printf("the vaule in the first register is %i\n", a);
    printf("the vaule in the first register is %i\n", b);
    
    return 0;
}

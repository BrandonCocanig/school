//Write the following two programs:

//1- Write a C program that spins a child process. The child process reads a number from the keyboard and passes the number on to the parent process via a pipe. The parent process waits until number becomes available and reads it from the pipe, prints the number to the screen and exits.


//Brandon Cocanig
//Due: March, 1st, 2019
//
#include<stdio.h>
#include<stdlib.h>
#include<unistd.h>

int main(int argc, char *argv[])
{

    int fd[2];
    int val = 0;
	
// create pipe descriptors
    pipe(fd);

    int pid;
    pid=fork();
    if(pid<0)
    {
        printf("\n Error ");
        exit(1);
    }
    else if(pid==0)// child
    {

	close(fd[0]); // dont need to read just write


        printf("\n Hello I am the child process ");
        printf("\n My pid is %d ",getpid());
	
	int val;

    printf("Please input an integer value: ");
    scanf("%d", &val);
    

	write(fd[1], &val, sizeof(val));
	close(fd[1]); // done close write

    return 0;

        exit(0);
    }
    else// parent
    {
	
	wait(NULL);// wait for child
	close(fd[1]); // only need to read so close write
	read(fd[0], &val, sizeof(val));// read the pipe
	

        printf("\n Hello I am the parent process ");
        printf("\n My actual pid is %d \n ",getpid());
	printf("Child(%d) received value: %d\n", getpid(), val);
	

	close(fd[0]); // close read
        exit(1);
    }

}

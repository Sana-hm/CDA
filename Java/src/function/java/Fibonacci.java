package function.java;

public class Fibonacci {

    public static int  fibonacci( int fib) {
        //exo 4 -  Fibonacci

        if (fib == 1 || fib == 2) {

            return 1;

        } else {
            return fibonacci(fib - 1) + fibonacci(fib - 2);
        }
    }
}

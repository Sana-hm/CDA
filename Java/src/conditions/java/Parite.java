package conditions.java;

import java.util.Scanner;

public class Parite {
    public static void main (String args[]) {

        //exo1

        System.out.println("Ecrivez un numéro :");

        Scanner sc = new Scanner(System.in);

        int a = sc.nextInt();

        if ( a % 2 == 0) {

            System.out.println("c\'est un chiffre pair");
        }
        else {

            System.out.println("c\'est un chiffre impair");

        }


    }
}

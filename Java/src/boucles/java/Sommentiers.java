package boucles.java;

import java.util.Scanner;

public class Sommentiers {

    public static void main (String args[]) {
        //exo2
        System.out.println("Entrez un nombre :");

        Scanner sc = new Scanner(System.in);

        int number = sc.nextInt();
        int sum = 0;

        for (int i = 0; i < number; i++) {

            sum += i;
        }

    }
}

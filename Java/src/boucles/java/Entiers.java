package boucles.java;

import java.util.Scanner;

public class Entiers {

    public static void main (String args[]) {
        //exo1
        System.out.println("Entrez un entier : ");

        Scanner sc = new Scanner(System.in);

        int number = sc.nextInt();

        for (int i = 1; i < number; i++) {
            System.out.println(i);
        }
    }
}

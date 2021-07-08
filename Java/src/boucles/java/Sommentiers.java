package boucles.java;

import java.util.Scanner;

public class Sommentiers {

    public static void sommmme () {
        //exo2 - La somme des entiers inférieurs à N

        System.out.println("Entrez un nombre :");

        Scanner sc = new Scanner(System.in);

        int number = sc.nextInt();
        int sum = 0;

        for (int i = 0; i < number; i++) {

            sum += i;
        }
        System.out.println("Le resultat est " + sum);
    }
}

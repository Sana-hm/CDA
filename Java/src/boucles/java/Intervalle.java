package boucles.java;

import java.util.Scanner;

public class Intervalle {

    public static void main (String args[]) {
        //exo3 - Somme d'un intervalle

        System.out.println("Entrez le premier nombre : ");

        Scanner sc = new Scanner(System.in);
        int n1 = sc.nextInt();

        System.out.println("Entrez le dauxième nombre : ");
        int n2 = sc.nextInt();
        int sum = 0;

        for (int i = n1; i < n2 ; i++) {

            sum += i;
        }
        System.out.println("le resultat est = " + sum);
    }
}

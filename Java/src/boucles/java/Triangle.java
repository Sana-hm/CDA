package boucles.java;

import java.util.Scanner;

public class Triangle {

    public static void main(String args[]) {
        //exo5 - dessin d'un triangle
        System.out.println("Combien de lignes? ");

        Scanner sc = new Scanner(System.in);
        int lines = sc.nextInt();

        for (int i = 1; i <= lines; i++) {

            for (int e = i; e < lines ; e++) { //Affiche Espace
                System.out.print(" ");
            }
            for (int k = 1; k <= i; k++) { //affiche *
                System.out.print("*");
            }
            for (int j = 2; j <= i; j++) { //affiche *
                System.out.print("*");
            }
            System.out.println(""); //aller sur la ligne souviant
        }
    }
}

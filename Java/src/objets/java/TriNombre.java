package objets.java;

import java.util.Arrays;
import java.util.Scanner;

public class TriNombre  {

    public int taille;
    public int[] tableau;

    public void saisie (){

        System.out.println("Entrez la taille du tableau : ");

        Scanner sc = new Scanner(System.in);
        taille = sc.nextInt();

        tableau = new int[taille];

        for (int i = 0; i < taille; i++){

            System.out.println("Entrez un chifrre : ");
            tableau[i] = sc.nextInt();
        }

    }

    public void tri() {

        int k;

        for (int i = 0; i < taille; i++) {

            for (int j = i+1; j < taille; j++) {

                if (tableau[i] >tableau[j]) {

                    k = tableau[j];
                    tableau[j] = tableau[i];
                    tableau[i] = k;
                }
            }
        }

    }

    public void affiche() {

        System.out.println(Arrays.toString(tableau));

    }

}

package tableaux.java;

import java.util.Arrays;
import java.util.Scanner;

public class Exo1 {

    public static void main(String args[]) {
//        exo1 Ecrivez un programme permettant de créer un tableau, dont la taille est saisie au clavier.
//        Ensuite l'utilisateur doit rentrer les différentes valeurs du tableau.
//        Puis votre programme doit afficher le contenu du tableau.


        System.out.println("Entrez la taille du tableaux : ");

        Scanner sc = new Scanner(System.in);

        int size = sc.nextInt();

        String[] tab = new String[size];

        for (int i = 0; i < size; i++) {

            System.out.println("Entrez la valeur numéro " + (i+1) + " : ");

            tab[i] = sc.next();

        }
        System.out.println("Voici votre tableaux : ");
        System.out.println(Arrays.toString(tab));
    }
}

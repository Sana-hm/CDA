package boucles.java;

import java.util.Scanner;

public class Nomvoyelles {
    //exo4 - Nombre de voyelles

    public static void main (String args[]) {

        System.out.println("Veuillez entrer un mot : ");

        Scanner sc = new Scanner(System.in);

        String word = sc.next();
        int voy = 0;

        for (int i = 0; i < word.length(); i++) {

            char chr = word.charAt(i);

            switch (chr){
                case 'a', 'e', 'i', 'o', 'u', 'y' -> voy++;
            }
        }
        System.out.println("Le resultat est " + voy);
    }
}

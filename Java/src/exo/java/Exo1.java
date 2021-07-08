package exo.java;

import java.util.Scanner;

public class Exo1 {

    public static void add() {
        //	exo1
        System.out.println("entrez le premier numéro : ") ;
        Scanner sc = new Scanner(System.in);
        int x = sc.nextInt();

        System.out.println("entrez le dauxième numéro :");
        int y = sc.nextInt();
        System.out.println("Le resultat est = " + ( x + y) );
    }

}

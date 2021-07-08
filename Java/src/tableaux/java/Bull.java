package tableaux.java;

import java.util.Arrays;
import java.util.Scanner;

public class Bull {

    public static void trier() {
        //exo3 - Tri d’un tableau
       //Ecrire un programme qui permet de trier un tableau en utilisant le tri à bulles.

       int[] bull = {1,8,16,0,7,45,13,100,85,63,11,60};
       int k;

        System.out.println(Arrays.toString(bull));

        for (int i = 0; i < bull.length; i++) {

            for (int j = i+1; j < bull.length; j++) {

                if (bull[i] > bull[j]) {

                    k = bull[j];
                    bull[j] = bull[i];
                    bull[i] = k;
                }
            }
        }
        System.out.println(Arrays.toString(bull));
    }
}

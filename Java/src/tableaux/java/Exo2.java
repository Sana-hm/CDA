package tableaux.java;

import java.util.Arrays;
import java.util.Scanner;

public class Exo2 {

    public static void main(String args[]) {
         //exo2 -
        // On recherche dans un tableau contenant 20 prénoms, un prénom saisi au clavier.
        //Lorsque cet élément est trouvé, on l’élimine du tableau en décalant les cases qui le suivent, et en mettant à blanc la dernière case

        String[] name = {"Julien","Leo","Lucas","Matteo","Maeva","Mael","Mathilde","Maxime",
                "Louise","Lucie","Manon","Gabriel","Noemie","Raphael","Pierre","Quentin","Jade","Hugo","Ines","Sarah"};

        System.out.println(Arrays.toString(name));

        System.out.println("Entrez un prénom : ");

        Scanner sc = new Scanner(System.in);

        String nom = sc.next();

        for (int i = 0; i < name.length; i++) {

            if (nom.equals(name[i])) {

                for (int j = i; j < name.length-1; j++){
                    name[j] = name[j + 1];
                }
                name[19] = "   " ;
            }
        }
        System.out.println(Arrays.toString(name));
    }
}

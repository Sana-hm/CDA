package exo.java;

import java.util.Scanner;

public class Exo6 {

    public static void ascii () {
        //exo6
        System.out.println("Veuillez entrer L'Unicode en décmial: ");

        Scanner sc = new  Scanner(System.in);

        int code = sc.nextInt();

        char charc = (char) code;
        System.out.println(charc);
    }

}

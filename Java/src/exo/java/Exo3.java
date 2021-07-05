package exo.java;

import java.util.Scanner;

public class Exo3 {
    public static void main (String args[]) {

        //exo3
        System.out.println("Entrez une températeur en Fahrenheit :");
        Scanner cc = new Scanner(System.in);
        float f = cc.nextFloat();
        float c = ((5f/9f) * (f-32));
        System.out.println("le resultat est " + (c) + " en degrés Celsius.");

    }
}

package exo.java;

import java.util.Scanner;

public class Exo4 {
    public static void main (String args[]) {

        //exo4
        double surveille;
        double ecrite;
        double pratique;

        Scanner sc = new Scanner(System.in);

        System.out.println(" Entrez la note de devoir surveillé : ");
        surveille = sc.nextDouble();

        System.out.println(" Entrez la note de  d’interrogation écrite  : ");
        ecrite = sc.nextDouble();

        System.out.println("Entrez la note de travaux pratique : ");
        pratique = sc.nextDouble();

        double resulut = (((surveille * 3 )+ (ecrite * 2 ) + (pratique * 1 )) / 6);
        System.out.println("Le calculer une moyenne sur la base de trois notes est : " + resulut);
    }
}

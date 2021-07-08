package ugi;

import conditions.java.Calculette;
import exo.java.*;
import conditions.java.*;
import boucles.java.*;
import tableaux.java.*;

import java.util.Scanner;

public class Menu {

    public void continuer(){
        System.out.println("===========================================");
        System.out.println("|               Bienvune !                |");
        System.out.println("===========================================");

        boolean repet = false;

        do {
            System.out.println("Entrez le numéro de l'exercice: ");
            Scanner sc = new Scanner(System.in);
            int numExo = sc.nextInt();
            switch (numExo){
                case 1 -> Exo1.add();
                case 2 -> Exo2.diviseur();
                case 3 -> Exo3.conversion();
                case 4 -> Exo4.moyenne();
                case 5 -> Exo5.conversion();
                case 6 -> Exo6.ascii();
                case 7 -> Parite.pair();
                case 8 -> Age.age();
                case 9 -> Calculette.calculette();
                case 10 -> Entiers.inferieurs();
                case 11 -> Intervalle.somme();
                case 12 -> Nomvoyelles.nomvoy();
                case 13 -> Palindrome.palindrome();
                case 14 -> Sommentiers.sommmme();
                case 15 -> Triangle.triangle();
                case 16 -> Tailles.taille();
                case 17 -> Prenom.prenom();
                case 18 -> Bull.trier();

        }
        while (repet);
    }
}

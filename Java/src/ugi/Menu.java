package ugi;

import conditions.java.Calculette;
import exo.java.*;
import conditions.java.*;
import boucles.java.*;
import tableaux.java.*;
import function.java.*;
import objets.java.*;

import java.util.Scanner;

public class Menu {

    public void continuer(){
        System.out.println("===========================================");
        System.out.println("|               Bienvune ^.^              |");
        System.out.println("===========================================");

        boolean repet = false;

        do {
            System.out.println("Entrez le numéro de l'exercice: ");
            Scanner sc = new Scanner(System.in);
            int numExo = sc.nextInt();
            switch (numExo) {
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
                case 19 ->{
                     System.out.println("Entrez le premier nombre : ");
                      double num1 = sc.nextDouble();

                    System.out.println("Entrez le dauxième nombre :");
                      double  num2 = sc.nextDouble();

                    System.out.println("Entrez un opérateur : ");
                      char op = sc.next().charAt(0);

                    double resul = Introduction.calcul( op, num1, num2 );
                    System.out.println("Le resultat est = " + resul);
                }

                case 20 ->{
                    System.out.println("Veuillez entrer la première chaine de caractères: ");
                    String firstStr = sc.next();

                    System.out.println("Veuillez entrer la seconde chaine de caractères: ");
                    String secondStr = sc.next();

                    String resul = Concat.concat(firstStr,secondStr);
                    System.out.println("Le resultat est = " + resul);
                }

                case 21 -> {

                    System.out.println("Veuillez entrer une phrase: ");
                    sc.nextLine();
                    String words = sc.nextLine();

                    int resul = Carateres.compteMot(words);
                    System.out.println("Le resultat est = " + resul);
                }

                case 22 -> {

                    System.out.println("Combien d'itérations voulez vous: ");
                    int  fibon = sc.nextInt();

                    int resul = Fibonacci.fibonacci(fibon);
                    System.out.println("Le resultat est = " + resul);
                }

                case 23 -> {

                    System.out.println("Veuillez entrer le nombre que vous voulez multiplier : ");
                    int num = sc.nextInt();

                    Multiplication.multiplication(num);
                }

                case 24 -> {

                    sc.nextLine();

                    System.out.println("Veuillez entrer une phrase : ");
                     String phr = sc.nextLine();

                    System.out.println("Veuillez entrer une lettre : ");
                    String lett = sc.next();

                    int resul = Lettres.countLettres(phr,lett);
                    System.out.printf("Il y a %d lettre(s) dans la phrase.", resul);
                    System.out.println();

                }

                case 25 -> {

                    String str1, resultat;

                    str1 = "robert;dupont;amiens;80000";

                    resultat = Token.strtok (str1, ";", 3);

                    System.out.println(resultat);
                }

                //objets.java
                case 26 ->{

                    Cercle cercle1 = new Cercle(10);

                    double surface1 = cercle1.calculSurface();

                    System.out.println("La surface = " + surface1);
                    double circonference1 = cercle1.calculCirconference();
                    System.out.println("La circonference  = " + circonference1);


                    Cercle cercle2 = new Cercle(45);
                    double surface2 = cercle2.calculSurface();

                    System.out.println("La surface = " + surface2);
                    double circonference2 = cercle2.calculCirconference();
                    System.out.println("La circonference  = " + circonference2);

                }

                case 27 ->{

                    TriNombre tri = new TriNombre();
                    tri.saisie();
                    tri.tri();
                    tri.affiche();
                }



                default -> System.out.println("Les exercice n'est pas trouver! ");
            }
                System.out.println("Voulez-vous contiuner? (y/n)");
                char chr = sc.next().charAt(0);
                switch (chr){
                    case 'y':
                        repet = true;
                        break;
                    case 'n':
                        repet = false;
                        break;

                    default:
                        System.out.println("Votre choix n'est pas reconnu, çe sera non!!");
                }
        }
        while (repet);
        System.out.println("===========================================");
        System.out.println("|               Au revoir *.*             |");
        System.out.println("===========================================");
    }
}


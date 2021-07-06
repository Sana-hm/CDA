package conditions.java;

import java.util.Scanner;

public class Calculette {

    public static void main (String args[]) {
        //exo3
        System.out.println("Entrez le premier numéro :");

        Scanner sc = new Scanner(System.in);

        float number1 = sc.nextInt();


        System.out.println("Entrez le dauxième numéro :");

        float number2 = sc.nextInt();


        System.out.println("Entrez un opérateur : ");

        char operator = sc.next().charAt(0);

        switch (operator) {

            case '+':
                System.out.println("Le resultat est = " + (number1 + number2));
                break;

            case '-':
                System.out.println("Le resultat est = " + (number1 - number2));
                break;

            case '*':
                System.out.println("Le resultat est = " + (number1 * number2));
                break;

            case '/':
                if( number2 == 0 ) {
                    System.out.println("division par 0 n\'est pas possible");
                }
                else {
                    System.out.println("Le resultat est = " + (number1 / number2));
                }
                break;

            default:
                System.out.println("L\'opérateur demandé n\'existe pas");
        }
    }
}

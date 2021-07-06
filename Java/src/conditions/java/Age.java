package conditions.java;

import java.time.LocalDate;
import java.util.Scanner;

public class Age {

    public static void main (String args[]) {
        //exo2

        System.out.println("Entrez votre l’année de naissance : ");

        Scanner sc = new Scanner(System.in);

        int birthYear = sc.nextInt();

        int currentYear = LocalDate.now().getYear();

        int age = currentYear - birthYear;

        System.out.println("Vous avez " + age + " ans.");

        if (age < 18) {

            System.out.println("Vous êtes mineur ! ");
        }
        else {

            System.out.println("Vous êtes majeur !");
        }
    }
}

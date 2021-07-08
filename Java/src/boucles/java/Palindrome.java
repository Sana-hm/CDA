package boucles.java;

import java.util.Scanner;

public class Palindrome {

    public static void palindrome () {

        //exo6 - Le palindrome (plus difficile)

        System.out.println("Entrez un mot ou une phrase: ");

        Scanner sc = new Scanner(System.in);

        String str = sc.nextLine();

        str = str.toLowerCase();

        int leng = str.length(); //compte le nombre des caractère

        String strNew = str;

        for (int i = 0; i < leng; i++) {

            char k = str.charAt(i);

            switch (k) {

                case ' ':
                    strNew = strNew.replace(" ", "");

                case ',' :
                    strNew = strNew.replace(",", "");

                case '-':
                    strNew = strNew.replace("-", "");

                case '\'':
                    strNew = strNew.replace("'", "");
            }
        }

        StringBuilder strb = new StringBuilder(strNew);

        String inverse = strb.reverse().toString();

        if (strNew.equals(inverse)) {
            System.out.println("c'est un palindrome");
        }
        else {
            System.out.println("ce n'est pas un palindrome");
        }
    }
}

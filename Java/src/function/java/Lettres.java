package function.java;

public class Lettres {

    public static int countLettres(String phrase, String lettre) {
        //exo 6 - Compter le nombre de lettres

        char lettr = lettre.charAt(0);
        int num = 0;

        for (int i = 0; i < phrase.length(); i++ ) {
            if (lettr == phrase.charAt(i)) {

                num++;
            }
        }
        return num;
    }
}

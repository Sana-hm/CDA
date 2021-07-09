package function.java;

public class Carateres {
    public static int compteMot(String phrase) {
        //exo 3 - 3. Chaine de caratères

        int space = 0;

        for (int i = 0; i < (phrase.length() - 1); i++){

            if (phrase.charAt(i)==' ') {
                space++;
            }
        }
        return space+1;
    }
}

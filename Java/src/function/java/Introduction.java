package function.java;

public class Introduction {

    public static double calcul(char operateur, double val1, double val2) {
        // exo1 - Introduction
        double resultat = 0;

        switch (operateur) {
            case '+':
                resultat = val1 + val2;
                break;

            case '-':
                resultat = val1 - val2;
                break;

            case '*':
                resultat = val1 * val2;
                break;

            case '/':
                if (!(val2 == 0)){
                    resultat = val1 / val2;
                    break;
                }else {
                    System.out.println("Division par zéro n'est pas possible! ");
                }

            default:
                System.out.println("Opérateur n'est pas valid! ");
        }
        return resultat;
    }
}


package gui;

import model.java.Message;

import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.Scanner;

public class Menu {

    private static boolean again = false;


    public static void start() {

        String home = System.getProperty("user.dir");

        String header =
                "╔══════════════════════════════════════╗\n" +
                "║   System d'encodage et de décodage   ║\n" +
                "║             de messages              ║\n" +
                "╠══════════════════════════════════════╣\n" +
                "║       1) Décoder un message          ║\n" +
                "║       2) Encode un message           ║\n" +
                "║       3) Quitter                     ║\n" +
                "╚══════════════════════════════════════╝";


        int k = 0;
        Path msgClearPath;
        Path msgEncodePath;
        Path keyPath;

        do {
            System.out.println(header);
            Scanner sc = new Scanner(System.in);
            k = sc.nextInt();

            switch (k) {
                case 1 -> {
                    System.out.println("Ecrivez le nom du fichier à décoder (sans extension)");
                    String encoded = sc.next();
                    msgEncodePath = Paths.get(home, encoded + ".txt");
                    System.out.println("Ecrivez le nom du fichier contenant la clé de décodage (sans extension)");
                    keyPath = Paths.get(home, sc.next() + ".txt");
                    msgClearPath = Paths.get(home, encoded + "Decoded.txt");
                    Message message = new Message(true, keyPath, msgClearPath, msgEncodePath);
                    message.readNwrite();
                }
                case 2 -> {
                    System.out.println("Ecrivez le nom du fichier à encoder (sans extension)");
                    String encode = sc.next();
                    msgClearPath = Paths.get(home,  encode + ".txt");
                    System.out.println("Ecrivez le nom du fichier contenant la clé de décodage (sans extension)");
                    keyPath = Paths.get(home, sc.next() + ".txt");
                    msgEncodePath = Paths.get(home, encode + "Encoded.txt");
                    Message message = new Message(false, keyPath, msgClearPath, msgEncodePath);
                    message.readNwrite();

                }
                case 3 -> { }

                default -> System.out.println("Entrez invalid ");
            }

            if(k!=3){
                System.out.println("Voulez vous continuer? y/n");
                char reponse = sc.next().charAt(0);
                switch (reponse){
                    case 'y' -> again = true;
                    case 'n' -> again = false;
                    default -> System.out.println("votre choix n'est pas reconnu, ce sera non !!!");
                }
            }

        }while (again);
        System.out.println("==================================================");
        System.out.println("|                   Au revoir!                   |");
        System.out.println("==================================================");
    }
}

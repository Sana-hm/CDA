package model.java;

import tools.java.TransCoder;

import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.StandardOpenOption;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Message {

    private boolean encoded;
    private List<String> msgClear = new ArrayList<>();
    private List<String> msgEncodded = new ArrayList<>();
    private Path msgClearPath;
    private Path msgEncodedPath;
    private Path keyPath;
    private String key;
    private TransCoder transCoder;


    public Message(boolean b, Path key, Path msgClear, Path msgEncoded) {

        encoded = b;
        msgClearPath = msgClear;
        msgEncodedPath = msgEncoded;
        keyPath = key;

    }

    public void readNwrite() {
        //on peut tester si la clé existe
        if (Files.exists(keyPath))
        {
            try {
                key = Files.readString(keyPath); // lire la clé
//                    System.out.println(key);
                    transCoder = new TransCoder(key);

            } catch (IOException e) {
                System.out.println(e.getMessage());
                System.out.println("la clé n'est pas lisible !");
            }
        }
        else
        {
            System.out.println("la clé n'existe pas");
            try (Scanner sc = new Scanner(System.in)) {
                System.out.println("Entrez la nouvelle clé: ");
                key = sc.next();
                transCoder = new TransCoder(key);
                try {
                    Files.writeString(keyPath,key + System.lineSeparator(), StandardOpenOption.CREATE, StandardOpenOption.APPEND);
                } catch (IOException e) {
                    System.out.println(e.getMessage());
                }
            }
        }


        if (encoded)
        {

            if (Files.exists(msgEncodedPath))
            {

                try {
                    msgEncodded = Files.readAllLines(msgEncodedPath); //lire le fichier à décoder
                } catch (IOException e) {
                    System.out.println(e.getMessage());
                    System.out.println("lire le fichier à décoder a échoué!");
                }
                for (String s: msgEncodded) {//lisons les lignes
                    msgClear.add(transCoder.decode(s));
                }
                for (String s : msgClear) { //écrivons les lignes dans le fichier
                    try {
                        Files.writeString(msgClearPath,s + System.lineSeparator(),StandardOpenOption.CREATE, StandardOpenOption.APPEND);
                    } catch (IOException e) {
                        System.out.println(e.getMessage());
                        System.out.println("écrire les lignes dans le fichier a échoué!");
                    }
                }

                System.out.println("le messsage a été bien décoder");
                System.out.println("Le message décodé se trouve: ");
                System.out.println(msgClearPath);

            }
            else
            {
                System.out.println("le fichier à décoder n'existe pas");
            }

        }
        else
        {
            //on peut tester si le fichier à encoder existe
            if (Files.exists(msgClearPath))
            {

                try {
                    msgClear = Files.readAllLines(msgClearPath); //lire le fichier à encoder
                } catch (IOException e) {
                    System.out.println(e.getMessage());
                }
                for (String s:
                        msgClear) {//lisons les lignes
                    msgEncodded.add(transCoder.encode(s));
                }
                for (String s : msgEncodded) { //écrivons les lignes dans le fichier
                    try {
                        Files.writeString(msgEncodedPath,s + System.lineSeparator(),StandardOpenOption.CREATE, StandardOpenOption.APPEND);
                    } catch (IOException e) {
                        System.out.println(e.getMessage());
                    }
                }

                System.out.println("le messsage a été bien encoder");
                System.out.println("Le message encodé se trouve: ");
                System.out.println(msgEncodedPath);

            }
            else
            {
                System.out.println("le fichier à encoder n'existe pas");
            }
        }

    }
}
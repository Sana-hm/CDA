package gui;

import java.util.Scanner;

public class Menu {

    public static void start() {
        String header =
                "╔══════════════════════════════════════╗\n" +
                "║   System d'encodage et de décodage   ║\n" +
                "║             de messages              ║\n" +
                "╠══════════════════════════════════════╣\n" +
                "║       1) Décoder un message          ║\n" +
                "║       2) Encode un message           ║\n" +
                "║       3) Quitter                     ║\n" +
                "╚══════════════════════════════════════╝";
        System.out.println(header);

        int k = 0;
        Scanner sc = new Scanner(System.in);
        k = sc.nextInt();
//        do {
//            switch (k){
//                case 1:
//
//            }
//        }

    }
}

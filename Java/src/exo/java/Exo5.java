package exo.java;

import java.util.Scanner;

public class Exo5 {
    public static void main (String args[]) {

        int hh, mm , ss;

        //exo5
        System.out.println("Veuillez entrer le nombre de secondes :");

        Scanner sc = new Scanner(System.in);

        int second = sc.nextInt();

        hh = (second / 3600);
        mm = ((second % 3600) / 60);
        ss =  ((second % 3600) % 60);

        System.out.println(hh + ":" + mm  + ":" + ss);


    }
}

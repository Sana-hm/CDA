package function.java;

import java.util.Arrays;

public class Token {

    public static String strtok (String str1, String str2, int n) {
        //exo 7 - String Token

        String[] str = str1.split(str2);
        System.out.println(Arrays.toString(str));

        return str[n-1];
    }
}

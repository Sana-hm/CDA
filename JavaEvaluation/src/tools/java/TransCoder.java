package tools.java;

import org.apache.commons.lang3.StringUtils;
import org.germain.tool.ManaBox;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

public class TransCoder {

    private HashMap<Character,String> encode = new HashMap<>();
    private  HashMap<String,Character> decode = new HashMap<>();

    public TransCoder(String str) {

        String keys = ManaBox.decrypt(str);
        StringBuilder values = new StringBuilder();

        char ch1 ='A';
        char ch2 = 'A';

        for (int i = 0; i < keys.length() ; i++) {

            values.append(ch1);
            values.append(ch2);
            ch2++;
            if (ch2 > 'Z') {

                ch1++;
                ch2 = 'A';
            }
        }
        for (int i = 0; i < keys.length()  ; i++) {

            encode.put(keys.charAt(i), values.substring((i * 2), (i * 2 )+ 2 ));
            decode.put( values.substring((i * 2), (i * 2 )+ 2 ),keys.charAt(i));
        }
    }

    public HashMap<Character, String> getEncode() {
        return encode;
    }

    public HashMap<String, Character> getDecode() {
        return decode;
    }

    public StringBuilder encode (String str){

        StringBuilder crypt = new StringBuilder();
        str = StringUtils.stripAccents(str);

        for (int i = 0; i < str.length() ; i++) {
            crypt.append(encode.get(str.charAt(i)));
        }
        return crypt;
    }

    public StringBuilder decode (String strCode){

        String[] strArr = new String[strCode.length() / 2];
        StringBuilder decrypt = new StringBuilder();

        for (int i = 0; i < strArr.length; i++) {
            strArr[i] = strCode.substring((i * 2 ),(i * 2 ) +2);
        }

        for (String s:strArr) {
            decrypt.append(decode.get(s));
        }
        return decrypt;
    }

}
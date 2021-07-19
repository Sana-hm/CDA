package tools.java;

import org.apache.commons.lang3.StringUtils;
import org.germain.tool.ManaBox;
import java.util.HashMap;

public class TransCoder {

    private final HashMap<Character,String> encode = new HashMap<>();
    private final HashMap<String,Character> decode = new HashMap<>();

    public TransCoder(String str) {

        String keys = ManaBox.decrypt(str);

        char ch1 ='A';
        char ch2 = 'A';

        for (int i = 0; i < keys.length()  ; i++) {

            encode.put(keys.charAt(i), ""+ch1+ch2);
            decode.put( ""+ch1+ch2 ,keys.charAt(i));
            if (ch2 != 'Z') {
                ch2++;
            }else {
                ch1++;
                ch2 = 'A';
            }
        }
    }

    public HashMap<Character, String> getEncode() {
        return encode;
    }

    public HashMap<String, Character> getDecode() {
        return decode;
    }

    public String encode (String str){

        String crypt = "";
        str = StringUtils.stripAccents(str);

        for (int i = 0; i < str.length() ; i++) {
            crypt = crypt + (encode.get(str.charAt(i)));
        }
        return crypt;
    }

    public String decode (String strCode){

        String[] strArr = new String[strCode.length() / 2];
        String decrypt = "";

        for (int i = 0; i < strArr.length; i++) {
            strArr[i] = strCode.substring((i * 2 ),(i * 2 ) +2);
        }

        for (String s:strArr) {
            decrypt = decrypt + (decode.get(s));
        }
        return decrypt;
    }

}
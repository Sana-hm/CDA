package test;

import function.java.Concat;
import org.junit.Assert;
import org.junit.Test;

public class ExoTests {

    @Test
    public void test1(){

        String str1 = "Hello";
        String str2 = "guys";

        Assert.assertEquals("Helloguys", Concat.concat(str1,str2));

    }
}

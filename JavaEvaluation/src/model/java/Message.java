package model.java;

import tools.java.TransCoder;

import java.nio.file.Path;
import java.util.ArrayList;
import java.util.Arrays;

public class Message {

    private Boolean encoded;
    private ArrayList<String> msgClear = new ArrayList<String>();
    private ArrayList<String> msgEncodded = new ArrayList<String>();
    private Path msgClearPath;
    private Path msgEncodedPath;
    private Path keyPath;
    private String key;
    private TransCoder transCoder;


    public Message(Boolean encod, Path msgClear, Path msgEncoded, Path key) {
        encoded = encod;
        msgClearPath = msgClear;
        msgEncodedPath = msgEncoded;
        keyPath = key;

    }

    public void readNwrite() {

    }
}
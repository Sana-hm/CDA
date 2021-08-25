package com.example.acquisition_donnes_http;

import com.google.gson.annotations.SerializedName;

public class Comment {

    private int postId;
    private int id;
    private String name;
    private String email;

    public int getPostId() {
        return postId;
    }

    public int getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public String getEmail() {
        return email;
    }

    public String getText() {
        return text;
    }

    //On dit à retrofit de faire la liaison entre body du Json et l'attribut text
    @SerializedName("body")
    private String text;
}

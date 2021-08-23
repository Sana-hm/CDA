package org.afpa.mondeafpa;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import java.util.Random;

public class MainActivity extends AppCompatActivity {

    private EditText faces_number;
    private Button button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {


        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        faces_number = findViewById(R.id.faces_number);
        button = findViewById(R.id.button);
        button.setOnClickListener(this::onClick);

    }

    public void onClick(View view) {
        faces_number.setText(String.valueOf( (int)(1 + Math.random() * 6)));
    }
}
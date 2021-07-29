package org.afpa.mondeafpa;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

import java.util.Random;

public class MainActivity extends AppCompatActivity {

//    private static final String FACSE_NUMBER = ;

    /**
     *
     * {inheritDoc}
     */

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    }

    public void throwDice(View view) {

        Intent intent = new Intent(this, DiceResultActivity.class);

        EditText facesNumberEditText = findViewById(R.id.faces_number);

        String facesNumber = facesNumberEditText.getText().toString();

        intent.putExtra(FACSE_NUMBER, facesNumber);



        Random random = new Random();

    }
}
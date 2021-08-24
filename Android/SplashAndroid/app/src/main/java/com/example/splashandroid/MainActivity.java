package com.example.splashandroid;

import android.content.Intent;
import android.os.Handler;
import android.view.WindowManager;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;
import android.widget.TextView;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity {

    //Variables
    private static int SPLASH_SCREEN = 5000;
    Animation topAnim, bottomAnim;
    ImageView logo;
    TextView desc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        // enlevons la bare en haut
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_main);

        //Animations
        topAnim = AnimationUtils.loadAnimation(this,R.anim.top_animation);
        bottomAnim = AnimationUtils.loadAnimation(this,R.anim.bottom_animation);

        //Hooks
        logo = findViewById(R.id.imageView);
        desc = findViewById(R.id.textView);


        //Assignment
        logo.setAnimation(topAnim);
        desc.setAnimation(bottomAnim);

        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                //Déclaration d'une nouvelle intention
                Intent intent = new Intent(MainActivity.this,Dashboard.class);
                //Démarrage de l'intention
                startActivity(intent);
                //Cloture du Splash Screen
                finish();
            }
        },SPLASH_SCREEN);
    }
}

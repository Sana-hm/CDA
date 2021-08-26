package com.example.crudandroid;

import androidx.appcompat.app.AppCompatActivity;

import android.app.ProgressDialog;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    // les champs
    private EditText editTextUserName,editTextEmail, editTextPassword;
    // le bouton
    private Button buttonRegister;
    // le progressdialog
    private ProgressDialog progressDialog;

    @Override
    public void onClick(View v) {
        // on se donne la possibilité d'avoir plusieurs actionneurs
        if (v == buttonRegister)
            registerUser();
    }

    private void registerUser() {
        final String email = editTextEmail.getText().toString().trim();
        final String username = editTextUserName.getText().toString().trim();
        final String password = editTextPassword.getText().toString().trim();
        // On affiche un popup de progression
        progressDialog.setMessage("Enregistrement utilisateur");
        progressDialog.show();
    }

    
}
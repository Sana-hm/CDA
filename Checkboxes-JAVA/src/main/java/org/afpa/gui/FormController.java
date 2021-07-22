package org.afpa.gui;

import javafx.scene.control.*;
import javafx.event.ActionEvent;
import javafx.scene.input.KeyEvent;


public class FormController {


    public TextField inputText;

    public TitledPane casse;
    public TitledPane texte;
    public TitledPane choix;
    public TitledPane fond;

    public CheckBox couleurFond;
    public CheckBox couleurText;
    public CheckBox casseCheck;

    public RadioButton minuscule;
    public RadioButton majuscule;
    public RadioButton RougeTexte;
    public RadioButton BlancTexte;
    public RadioButton NoirTexte;
    public RadioButton BleuFond;
    public RadioButton VertFond;
    public RadioButton RougeFond;

    public ToggleGroup fondGroup;
    public ToggleGroup txtGroup;
    public ToggleGroup cassGroup;

    public Label label;

    String style = "";

    public void saisir(KeyEvent inputMethodEvent) {

        inputText = (TextField) inputMethodEvent.getSource();
        label.setVisible(true);
        label.setText(inputText.getText());
        choix.setDisable(false);
        changer();

    }

    public void activeBox(ActionEvent actionEvent) {

        fond.setDisable(!couleurFond.isSelected());
        casse.setDisable(!casseCheck.isSelected());
        texte.setDisable(!couleurText.isSelected());
    }

    public void changeCasse(ActionEvent actionEvent) {

        if(minuscule.isSelected()){
            label.setText(inputText.getText().toLowerCase());
        }
        if(majuscule.isSelected()){
            label.setText(inputText.getText().toUpperCase());
        }
    }

    public void changer(){

        if (RougeFond.isSelected()){
            style += "-fx-background-color: red; ";
        }
        if(VertFond.isSelected()){
            style += "-fx-background-color: green; ";
        }
        if(BleuFond.isSelected()){
            style += "-fx-background-color: blue; ";
        }

        if (BlancTexte.isSelected()){
            style += "-fx-text-fill: white; ";
        }
        if(RougeTexte.isSelected()){
            style += "-fx-text-fill: red; ";

        }
        if(NoirTexte.isSelected()){
            style += "-fx-text-fill: black; ";
        }


        label.setStyle(style);
    }


}








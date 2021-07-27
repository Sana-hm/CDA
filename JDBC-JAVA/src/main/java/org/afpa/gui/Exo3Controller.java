package org.afpa.gui;

import javafx.fxml.FXML;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.control.TextFormatter;

import java.net.URL;
import java.sql.*;
import java.util.ResourceBundle;
import java.util.function.Supplier;

public class Exo3Controller {
    public TextField nom;
    public TextField rue;
    public TextField contact;
    public TextField cp;
    public TextField ville;
    public Button annuler;
    public Button ajouter;

    
    public void initialize(URL url, ResourceBundle resourceBundle) {

        String isValidString = "^(\\s|\\w|\\d)*?$";
        String  isValidCodPostal = "^\\d{0,5}$";
        
        this.settextFormatter(this.nom, isValidString);
        this.settextFormatter(this.rue, isValidString);
        this.settextFormatter(this.contact, isValidString);
        this.settextFormatter(this.cp, isValidCodPostal);
        this.settextFormatter(this.ville, isValidString);


    }
    @FXML
    public void add() throws SQLDataException {

        String nameText = this.nom.getText();
        String rueText = this.rue.getText();
        String contactText = this.contact.getText();
        String cpText = this.cp.getText();
        String villeText = this.ville.getText();

        Supplier supplier = new Supplier();
        int isAdded = supplier.addSupplier(nameText, rueText, contactText, cpText, villeText);

        if (isAdded != 0) {
            this.alert(Alert.AlertType.INFORMATION, "Le fournisseur à été ajouté.", "Ajout du fournisseur.");
            this.abort();
        }
        else{
            this.alert(Alert.AlertType.ERROR, "Une erreur est survenue lors de l'ajout.", "Erreur lors de l'ajout.");
        }

    }

    private void abort() {

        this.nom.setText("");
        this.rue.setText("");
        this.contact.setText("");
        this.cp.setText("");
        this.ville.setText("");
    }

    private void alert(Alert.AlertType alertType, String content, String header) {
            
        Alert alert = new Alert(alertType);
        alert.setTitle("AddSupplier");
        alert.setContentText(content);
        alert.setHeaderText(header);
        alert.showAndWait();
    }

    private void settextFormatter(TextField textField, String matcher) {
        textField.setTextFormatter(new TextFormatter<>(change -> 
                change.getControlNewText().matches(matcher) ? change : null
                ));

    }
}

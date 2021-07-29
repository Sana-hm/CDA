package org.afpa.gui;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import org.afpa.dal.SupplierDAO;
import org.afpa.model.Supplier;

import java.sql.SQLDataException;

public class Exo3Controller {
    public TextField nom;
    public TextField rue;
    public TextField contact;
    public TextField cp;
    public TextField ville;
    public Button annuler;
    public Button ajouter;

    public String isValidString = "^(\\s|\\w|\\d)*?$";
    public String  isValidCodPostal = "^\\d{0,5}$";

    public Label contactError;
    public Label villeError;
    public Label cpError;
    public Label adreseError;
    public Label nomError;


    @FXML
    public void add() throws SQLDataException {


        String nameText = nom.getText();
        String rueText = rue.getText();
        String contactText = contact.getText();
        String cpText = cp.getText();
        String villeText = ville.getText();

        if (!nom.getText().matches(isValidString) || nom.getText().equals("")){
            nomError.setVisible(true);
            nomError.setText("Veuillez entrer un nom valide !");
        }else{
            nomError.setVisible(false);
        }
        if (!rue.getText().matches(isValidString) || rue.getText().equals("")){
            adreseError.setVisible(true);
            adreseError.setText("Veuillez entrer une adresse valide !");
        }else{
            adreseError.setVisible(false);
        }
        if (!cp.getText().matches(isValidCodPostal) || cp.getText().equals("")){
            cpError.setVisible(true);
            cpError.setText("Veuillez entrer un code postal valide !");
        }else{
            cpError.setVisible(false);
        }
        if (!ville.getText().matches(isValidString) || ville.getText().equals("")){
            villeError.setVisible(true);
            villeError.setText("Veuillez entrer une ville valide !");
        }else{
            villeError.setVisible(false);
        }
        if (!contact.getText().matches(isValidString) || contact.getText().equals("")) {
            contactError.setVisible(true);
            contactError.setText("Veuillez entrer un contact valide !");
        } else {
            contactError.setVisible(false);
        }

        if (!adreseError.isVisible() && !nomError.isVisible() && !villeError.isVisible() && !contactError.isVisible() && !cpError.isVisible()) {


            Supplier supplier = new Supplier(nameText, rueText, contactText, cpText, villeText);

            boolean b = SupplierDAO.addSupplier(supplier);

            if (b) {
                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setContentText("Le fournisseur à été ajouté !");
                alert.showAndWait();
            } else {
                Alert alert = new Alert(Alert.AlertType.WARNING);
                alert.setContentText("Une erreur est survenue lors de l'ajout !");
                alert.showAndWait();
            }

        }
    }

    public void reset(ActionEvent actionEvent) {
        nom.clear();
        rue.clear();
        contact.clear();
        cp.clear();
        ville.clear();

        nomError.setVisible(false);
        adreseError.setVisible(false);
        cpError.setVisible(false);
        villeError.setVisible(false);
        contactError.setVisible(false);
    }
}


package org.afpa.gui;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import org.afpa.model.Client;

import java.awt.event.ActionEvent;

public class FormController {
    public Button ajouter;
    public Button modifier;
    public Button supprimer;
    public TableView<Client> tableau;
    public TableColumn<Client, String> prenomTabl;
    public TableColumn<Client, String> nomTabl;
    public TextField villeTxt;
    public TextField nomTxt;
    public TextField prenomTxt;

    ObservableList<Client> model = FXCollections.observableArrayList();


    @FXML
    public void initialize() {

        model.add(new Client("Josh", "Homme", "Joshua Tree"));
        model.add(new Client("Dave", "Grohl", "Warren"));
        model.add(new Client("Krist", "Novoselic", "Compton"));

        prenomTabl.setCellValueFactory(new PropertyValueFactory<>("prenom"));
        nomTabl.setCellValueFactory(new PropertyValueFactory<>("nom"));

        tableau.setItems(model);
    }


    public void getClient(MouseEvent mouseEvent) {
        Client cli = tableau.getSelectionModel().getSelectedItem();
        prenomTxt.setText(cli.getPrenom());
        nomTxt.setText(cli.getNom());
        villeTxt.setText(cli.getVille());
    }

    public void removeClient(javafx.event.ActionEvent actionEvent) {

        model.remove(tableau.getSelectionModel().getSelectedItem());
    }

    public void updateClient(javafx.event.ActionEvent actionEvent) {

       int indexCli = tableau.getSelectionModel().getSelectedIndex();

        Client client = new Client();

        client.setNom(nomTxt.getText());
        client.setPrenom(prenomTxt.getText());
        client.setVille(villeTxt.getText());

        model.set(indexCli, client);

    }

    public void addClient(javafx.event.ActionEvent actionEvent) {
        Client cli = new Client(nomTxt.getText(), prenomTxt.getText(), villeTxt.getText());
        model.add(cli);
    }
}

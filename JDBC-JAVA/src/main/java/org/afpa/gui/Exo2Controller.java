package org.afpa.gui;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TextArea;

import java.sql.*;
import java.util.*;

public class Exo2Controller {
    public TextArea textArea;
    public ObservableList<Object> list = FXCollections.observableArrayList();
    public ComboBox<Object> liste;
    public HashMap<String, Integer> fournisList;

    @FXML
    public void initialize() {

        try {

            String url = "jdbc:mysql://localhost:3306/papyrus";
            Connection connection = DriverManager.getConnection(url, "root", "root");
            Statement statement = connection.createStatement();
            ResultSet resultSet = statement.executeQuery("SELECT * FROM fournis");
            fournisList = new HashMap<>();

            while (resultSet.next()) {

                fournisList.put(resultSet.getString("nomfou"),resultSet.getInt("numfou"));

            }

//            System.out.println(fournisList);

            list.addAll(fournisList.keySet());
//            System.out.println(list);

            liste.setItems(list);

        } catch (Exception e) {
            System.out.println("Error");
            System.out.println(e.getMessage());
        }
    }

    public void ChoixFou(ActionEvent actionEvent) throws SQLException {
        textArea.clear();
        String url = "jdbc:mysql://localhost:3306/papyrus";
        Connection connection = DriverManager.getConnection(url, "root", "root");
        PreparedStatement preparedStatement = connection.prepareStatement("SELECT * FROM entcom WHERE numfou=?");
        preparedStatement.setInt(1,fournisList.get(liste.getValue()));
        ResultSet resultSet = preparedStatement.executeQuery();

        while (resultSet.next()) {
            textArea.appendText(resultSet.getInt("numcom")+ " " + resultSet.getTime("datcom")+ " " +resultSet.getString("obscom")+ "\r\n");
        }
    }
}


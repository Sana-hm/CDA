package org.afpa.gui;

import javafx.event.ActionEvent;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import org.afpa.App;

import java.sql.*;

public class Exo1Controller {
    public TextField codeFourni;
    public TextField ville;
    public TextField contact;
    public TextField cp;
    public TextField nom;
    public TextField adres;
    public Button searchBtn;

    public void search(ActionEvent actionEvent) {

        if(!codeFourni.getText().equals("") && codeFourni.getText().length()<12){

            try {

                String url = "jdbc:mariadb://localhost:3306/papyrus";
                Connection connection = DriverManager.getConnection(url, "root" , "root");
                PreparedStatement preparedStatement = connection.prepareStatement("SELECT * FROM fournis WHERE numfou=?");
                preparedStatement.setInt(1,Integer.parseInt(codeFourni.getText()));
                ResultSet resultSet = preparedStatement.executeQuery();
                if (!resultSet.next()) {
                    App.changeFxml("error1");
                }
                while (resultSet.next()){
                    nom.setText(resultSet.getString("nomfou"));
                    adres.setText(resultSet.getString("ruefou"));
                    cp.setText(resultSet.getString("posfou"));
                    ville.setText(resultSet.getString("vilfou"));
                    contact.setText(resultSet.getString("confou"));
                }

                preparedStatement.close();
                resultSet.close();
                connection.close();


            }catch (Exception e){
                System.out.println("Error");
                System.out.println(e.getMessage());
            }
        }


    }
}

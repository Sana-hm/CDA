package org.afpa.dal;

import org.afpa.model.Supplier;

import java.sql.*;

public class SupplierDAO {

   public static boolean addSupplier(Supplier supplier) {

       PapyrusDB papyrusDB = new PapyrusDB();

       try {

           Statement statement = papyrusDB.getConn().createStatement();
           ResultSet resultSet = statement.executeQuery("SELECT MAX(numfou) AS maxnum FROM fournis ");
           statement.close();
           int maxnumfou=0;
           while (resultSet.next()) {

               maxnumfou = resultSet.getInt("maxnum");

           }

           PreparedStatement preparedStatement = papyrusDB.getConn().prepareStatement("INSERT INTO fournis (numfou ,nomfou, ruefou, vilfou, posfou, confou) VALUES (?, ?, ?, ?, ?, ?)");
           preparedStatement .setInt(1, ++maxnumfou);
           preparedStatement .setString(2, supplier.getNomfou());
           preparedStatement .setString(3, supplier.getRuefou());
           preparedStatement .setString(4, supplier.getVilfou());
           preparedStatement .setString(5, supplier.getPosfou());
           preparedStatement .setString(6, supplier.getConfou());

           preparedStatement.execute();
           preparedStatement.close();
           papyrusDB.getConn().close();

           return true;
       }
       catch (SQLException throwables ) {

           throwables.getStackTrace();
           System.out.println(throwables.getMessage());
           return false;
       }

   }

}

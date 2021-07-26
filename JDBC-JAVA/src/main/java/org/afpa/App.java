package org.afpa;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

import java.io.IOException;
import java.util.Objects;

public class App extends Application {

    public static void main(String[] args) {
        launch(args);
    }

    public static void changeFxml(String fxml) throws IOException {

        Parent root = FXMLLoader.load((Objects.requireNonNull(App.class.getResource("gui/"+ fxml + ".fxml"))));
        Scene newscene =new Scene(root);
        Stage newstage = new Stage();
       newstage.setScene(newscene);
        newstage.setResizable(false);
        newstage.setTitle(fxml);
        newstage.show();
    }

    @Override
    public void start(Stage primaryStage) throws IOException {

        Parent root = FXMLLoader.load((Objects.requireNonNull(getClass().getResource("gui/home.fxml"))));
        Scene scene =new Scene(root);
        primaryStage.setScene(scene);
        primaryStage.setResizable(false);
        primaryStage.show();
    }
}

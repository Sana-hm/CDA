package org.afpa.gui;

import javafx.event.ActionEvent;
import javafx.scene.control.Button;
import org.afpa.App;

import java.io.IOException;

public class HomeController {


    public Button exo2;
    public Button exo3;
    public Button exo1;

    public void newWindow(ActionEvent actionEvent) throws IOException {

            Button btn = (Button)actionEvent.getSource();
            App.changeFxml(btn.getId());
    }
}

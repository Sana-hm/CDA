package org.afpa.gui;

import javafx.beans.value.ChangeListener;
import javafx.fxml.FXML;
import javafx.scene.control.Slider;
import javafx.scene.layout.Pane;

public class FormController {


    public Pane ecran;

    public double b=0;
    public double r=0;
    public double g=0;
    public Slider sliderBlue;
    public Slider sliderRed;
    public Slider sliderGreen;
    public Pane blue;
    public Pane red;
    public Pane green;



    @FXML
    public void initialize() {

        //noinspection unchecked
        sliderRed.valueProperty().addListener((ChangeListener)(value, oldValue, newValue)->{

            r = sliderRed.getValue();
            ecran.setStyle("-fx-background-color: RGB("+r+","+g+","+b+")");

        } );

        //noinspection unchecked
        sliderBlue.valueProperty().addListener((ChangeListener)(value, oldValue, newValue)->{

            b = sliderBlue.getValue();
            ecran.setStyle("-fx-background-color: RGB("+r+","+g+","+b+")");
        } );

        //noinspection unchecked
        sliderGreen.valueProperty().addListener((ChangeListener)(value,oldValue,newValue) ->{

            g = sliderGreen.getValue();
            ecran.setStyle("-fx-background-color: RGB("+r+","+g+","+b+")");
        });
    }
}

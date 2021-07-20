package org.afpa.gui;


import javafx.event.ActionEvent;
import javafx.scene.control.Button;
import javafx.scene.control.TextArea;

import java.math.BigDecimal;

public class FormController {

    public Button un;
    public Button deux;
    public Button trois;
    public Button addition;
    public Button quatre;
    public Button sept;
    public Button cinq;
    public Button huit;
    public Button six;
    public Button soustraction;
    public Button neuf;
    public Button multiplication;
    public Button division;
    public Button zero;
    public Button egal;
    public TextArea display;
    public Button effacer;
    public Integer operand1;
    public Integer operand2;
    public Integer result;
    public String operator;
    public boolean hasOperator;




    public void getButton(ActionEvent actionEvent) {

        hasOperator = false;


        Button btn = (Button) actionEvent.getSource();
        final String buttonText = btn.getText();


        if (buttonText.equals("C")) {
            display.clear();
        }
        if (buttonText.matches("[0-9]")) {
            display.appendText(buttonText);
        }
        if (buttonText.matches("[＋－×÷]")) {
            operand1 = Integer.parseInt(display.getText());
            hasOperator =true;

        }
        if (buttonText.equals("=")) {
            operand2 = Integer.parseInt(display.getText());
            result = calculate(operator, operand1, operand2);
            display.setText(String.valueOf(result));
        }
    }
    private static Integer  calculate(String operator, Integer operand1, Integer operand2) {
        switch (operator) {
            case "＋":
                return operand1 + operand2;
            case "－" :
                return operand1 - operand2;
            case "×":
                return operand1 * operand2;
            case "÷":
                return operand1 / operand2;
            default:
        }
        return 0;
    }

}

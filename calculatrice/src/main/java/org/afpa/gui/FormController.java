package org.afpa.gui;


import javafx.event.ActionEvent;
import javafx.scene.control.Button;
import javafx.scene.control.TextArea;


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
    public double operand1;
    public double operand2;
    public double result;
    public String operator;
    public boolean b;

    public void getButton(ActionEvent actionEvent) {


        Button btn = (Button) actionEvent.getSource();
        final String buttonText = btn.getText();


        if (buttonText.equals("C")) {
            display.clear();
            operator = null;
            operand1 = 0;
            operand2 = 0;
            result = 0;
        }
        if (buttonText.matches("[0-9]")) {
            if(b){
                display.clear();
                b=false;
            }

            display.appendText(buttonText);
            if(operator == null){
                operand1 = Integer.parseInt(display.getText());
            }else {
                operand2 = Integer.parseInt(display.getText());
            }

        }
        if (buttonText.equals("+") || buttonText.equals("-") || buttonText.equals("*") || buttonText.equals("/")) {

            operator = buttonText;
            display.clear();

        }
        if (buttonText.equals("=")) {

            System.out.println(operator);
            System.out.println(operand1);
            System.out.println(operand2);

            result = calculate(operator, operand1, operand2);
            display.setText(String.valueOf(result));
            b = true;

        }
    }
    private static double calculate(String operator, double operand1, double operand2) {
        return switch (operator) {
            case "+" -> operand1 + operand2;
            case "－" -> operand1 - operand2;
            case "*" -> operand1 * operand2;
            case "/" -> operand1 / operand2;
            default -> 0;
        };
    }

}

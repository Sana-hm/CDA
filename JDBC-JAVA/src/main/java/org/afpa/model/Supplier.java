package org.afpa.model;

public class Supplier {

    int numfou;
    String nomfou;
    String ruefou;
    String posfou;
    String vilfou;
    String confou;
    int satisf;

    public Supplier() {
    }

    public int getNumfou() {
        return numfou;
    }

    public void setNumfou(int numfou) {
        this.numfou = numfou;
    }

    public String getNomfou() {
        return nomfou;
    }

    public void setNomfou(String nomfou) {
        this.nomfou = nomfou;
    }

    public String getRuefou() {
        return ruefou;
    }

    public void setRuefou(String ruefou) {
        this.ruefou = ruefou;
    }

    public String getPosfou() {
        return posfou;
    }

    public void setPosfou(String posfou) {
        this.posfou = posfou;
    }

    public String getVilfou() {
        return vilfou;
    }

    public void setVilfou(String vilfou) {
        this.vilfou = vilfou;
    }

    public String getConfou() {
        return confou;
    }

    public void setConfou(String confou) {
        this.confou = confou;
    }

    public int getSatisf() {
        return satisf;
    }

    public void setSatisf(int satisf) {
        this.satisf = satisf;
    }

    public Supplier(String nameText, String rueText, String contactText, String cpText, String villeText) {

        this.nomfou = nameText;
        this.ruefou = rueText;
        this.posfou = cpText;
        this.vilfou = villeText;
        this.confou = contactText;

    }

}

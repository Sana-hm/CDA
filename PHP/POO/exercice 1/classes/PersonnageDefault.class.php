<?php
class personnage{
    public $_nom;
    public $_prenom;
    public $_age;
    public $_sexe;

     function  __construct($nom, $prenom, $age, $sexe)
     {
         echo $this->_nom = $nom;
         echo $this->_prenom = $prenom;
         echo $this->_age = $age;
         echo $this->_sexe = $sexe;
     }
}// fin de la classe personnage

//Instanciation d'une personnage 
$personne = new personnage("Loper" , "Dave" , 18 , "masculin");

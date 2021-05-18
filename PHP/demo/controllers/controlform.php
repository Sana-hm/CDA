<?php
$regex = [
    'lastename' = '/^[A-Za-z]+$/' , 
    'firstname' = '/^[A-Za-z]+$/'
]

//definition d'un tableau d'erreur
$formError = [];

if (isset($_POST['validate'])) {
    var_dump($_POST);
    //si le champs firstname n'est pas vide
    if(!empty($_POST['firstname'])){
        //si la valeur saisie passe le regex
        if(preg_match($regexFirstname, $_POST['firstname'])){
            //stockage de la valeur saisie dans  une variable 
            $firstname = htmlspecialchars($_POST['firstname']);
        }
        else{
            //definition d'un message d'erreur et stockage dans un tableau
            $formError['firstname'] = 'Caravtere non valid !';
        }
        else{
            $formError['firstname'] = 'champ vide !';
        }
    }

}
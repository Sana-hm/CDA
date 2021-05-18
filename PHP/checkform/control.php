<?php
include 'funcForm.php';
   
 $regex = [
        'nom' => '/^[A-Za-z]+$/',
        'prenom' => '/^[A-Za-z]+$/',
        'sexe' =>  '/^[A-Za-z]+$/',
        'phone' => '/^[0-9]*$/',
        'password' => '/^[A-Za-z]+$/',
        'adresse' => '/[^0-9A-Za-z]/',
        'mail' => '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'
];
// si le formulaire est envoyé
if(isset($_POST['validate'])) {
     // appel de la fonction de validation de formulaire
    $formError = validForm($regex , $_POST);
        // s'il n'y a pas d'erreur
        if(count($formError) === 0) {
             // stockage de données saisies dans des variable avant utilisation
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $sexe = htmlspecialchars($_POST['sexe']);
            $phone = htmlspecialchars($_POST['phone']);
            $password = htmlspecialchars($_POST['password']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $mail = htmlspecialchars($_POST['mail']);
        }
}


?>
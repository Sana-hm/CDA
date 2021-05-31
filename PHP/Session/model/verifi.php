<?php

session_start();
//connection database
$db_username = 'root';
$db_password = 'root';
$db_nom = 'myGuests';
$db_host = 'localhost';
$charset = 'utf8';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_nom,$charset);


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$password = $_POST['pass'];

if(isset($_POST['submit']) && isset($_POST['login'])){
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mail = htmlspecialchars($_POST['mail']);
$password = htmlspecialchars($_POST['pass']);

$req->execute(array("prenom" => $prenom, "nom" => $nom, 
 "pass" => $password, "mail" => $email ));

if (!empty($nom) && !empty($prenom) && !empty($mail) && !empty($pass)) {

}else{ ?>
<b>Veuillez remplir tous les champs !</b> 
<?php
}

if (empty($nom) && empty($prenom) && empty($mail) && empty($pass)) {

}else{
    session_start();
    $_SESSION[''] = $_POST[''];
    header('location : index.php');
}
}


    mysqli_close($db); // fermer la connexion
?>
<?php 
$host = 'localhost';
$name = 'record';
$charset = 'utf8';
$user = 'root';
$pass = 'root';
$dsn = "mysql:host=$host;dbname=$name;charset=$charset";

try {
    $db = new PDO($dsn , $user , $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<p>connection to database was successful !</p>";
} catch (PDOException $e) {
    // echo "<p>connection to database was not successful!</p>";
    // echo "Erreur : " . $e->getMessage() . "<br>";
    //     echo "N° : " . $e->getCode();
}



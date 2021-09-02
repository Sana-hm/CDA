<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers,Authorization,X-Requested-Width");

    // on se connecte à la base
    include_once '../config/database.php';

    // l'objet disc
    include_once '../objects/disc.php';

    $database = new Database();
    $db = $database->getConnection();

    $disc = new Disc($db);

    // on récupère les données du post
     $data = json_decode(file_get_contents("php://input"));


//Disc

// on s'assure que ce n'est pas vide
if (
    !empty($data->disc_title) &&
    !empty($data->disc_year)&&
    !empty($data->disc_label) &&
    !empty($data->disc_genre) &&
    !empty($data->disc_price)&&
    !empty($data->disc_picture)&&
    !empty($data->artist_id)
){
    $disc->disc_title = $data->disc_title;
    $disc->disc_year = $data->disc_year;
    $disc->disc_label =$data->disc_label;
    $disc->disc_genre = $data->disc_genre;
    $disc->disc_price = $data->disc_price;
    $disc->disc_picture = $data->disc_picture;
    $disc->artist_id = $data->artist_id;




    if ($disc->create()) {

        //on envoie le code 201
        http_response_code(201);

        // on averti l'utilisateur
        echo json_encode(array("message" => "Disc Créé."));
    }

    else{

        // on envoie le code 503
        http_response_code(503);

        // on averti l'utilisateur
        echo json_encode(["messsage" => "Impossible de créer le disc!"]);
    }
}else{

    http_response_code(400);
    echo json_encode(["message" => "Impossible de créer le disc! les données sont incomplètes!"]);
}

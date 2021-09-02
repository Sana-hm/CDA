<?php

    // Les headers dont nous avons besoin
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");


    // inclusion de database et product
    include_once '../config/database.php';
    include_once '../objects/disc.php';

    // instanciation de database et de product
    $database = new Database();
    $db = $database->getConnection();

    // On initialise product

    $disc = new Disc($db);

    $stmt = $disc->read();

    $num = $stmt->rowcount();

// on regarde si on a plus d'un résultat
    if ($num>0) {

        // tableau de artist
        $artists_arr = array();
        $artists_arr["record"]=array();

        $discs_arr = array();
        $discs_arr["record"]=array();

        // on récupère le contenu de la table
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);


            $disc_item = array(

              "id" => $disc_id,
              "title"=> $disc_title,
              "year" => $disc_year,
              "picture" => $disc_picture,
              "label"=> $disc_label,
              "genre"=> $disc_genre,
              "price"=> $disc_price,
                "artist" => $artist_name
            );

            array_push($discs_arr["record"], $disc_item);
        }

        // on envoie la réponse http à 200 OK
        http_response_code(200);

        // on renvoie la réponse en Json
        echo json_encode($discs_arr);
    }
    else{
        // on renvoie le code 404 Not found
        http_response_code(404);

        // On averti l'utilisateur
        echo json_encode(array("message"=> "Aucun produits trouvés."));

    }



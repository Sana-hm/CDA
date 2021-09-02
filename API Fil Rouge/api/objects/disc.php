<?php


class Disc
{
    // connexion à la base
    private $conn;
    private $table_name = "disc";

    // membres de l'objet Disc
    public  $disc_id;
    public  $disc_title;
    public  $disc_year;
    public  $disc_picture;
    public  $disc_label;
    public  $disc_genre;
    public  $disc_price;
    public  $artist_id;


    public function __construct($db) {
        $this->conn = $db;
    }


    public function read() {

        $query = "SELECT `disc_id`, `disc_title`, `disc_price`,`disc_year`,`disc_picture`,`disc_label`, `disc_genre`, `artist_name` 
                FROM `disc`,`artist` 
                WHERE `disc`.`artist_id` = `artist`.`artist_id`
                ORDER BY `disc_id`";

        // on prépare la requête
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    function create() {

        $query = "INSERT INTO `disc` (`disc_title`, `disc_year`, `disc_picture`, `disc_label`, `disc_genre`, `disc_price`, `artist_id`) 
                        VALUES (:disc_title, :disc_year, :disc_picture, :disc_label, :disc_genre, :disc_price, :artist_id)";
        // on prépare la requête
        $stmt = $this->conn->prepare($query);


        //nettoyage
        $this->disc_id = htmlspecialchars(strip_tags($this->disc_id));
        $this->disc_title = htmlspecialchars(strip_tags($this->disc_title));
        $this->disc_year = htmlspecialchars(strip_tags($this->disc_year));
        $this->disc_picture = htmlspecialchars(strip_tags($this->disc_picture));
        $this->disc_label = htmlspecialchars(strip_tags($this->disc_label));
        $this->disc_genre = htmlspecialchars(strip_tags($this->disc_genre));
        $this->disc_price =htmlspecialchars(strip_tags($this->disc_price));
        $this->artist_id =htmlspecialchars(strip_tags($this->artist_id));


        // on bind
        $stmt->bindParam("disc_title", $this->disc_title);
        $stmt->bindParam("disc_year", $this->disc_year);
        $stmt->bindParam("disc_picture", $this->disc_picture);
        $stmt->bindParam("disc_label", $this->disc_label);
        $stmt->bindParam("disc_genre", $this->disc_genre);
        $stmt->bindParam("disc_price", $this->disc_price);
        $stmt->bindParam("artist_id", $this->artist_id);



        // on lance la requête
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

}
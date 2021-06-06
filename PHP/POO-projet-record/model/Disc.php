
<?php
class Disc extends ModelParent {

        public function __construct() {
        $this->table = 'disc';

        $this->getConnection();
    }

    public function getDetails($id) {
        
        $requete = $this->_con->prepare("SELECT * FROM disc, artist WHERE disc.artist_id = artist.artist_id AND disc_id =:id ");
        $requete->bindValue(":id" , $id);
        $requete->execute();
        $disc = $requete->fetch(PDO::FETCH_OBJ);
        return $disc;
    }

    public function delete($id) {

        try {

            $delete = $this->_con->prepare("DELETE FROM disc WHERE disc_id = :disc_id");
            $delete->bindparam(":disc_id" , $id);
            $delete->execute();
            return true;
            
        } catch (PDOException $e) {
            return false;
            echo $e->getMessage();
        }
    }

    //methode for function add()
    public function add($title , $year, $picture, $label, $genre, $price , $artist) {
        try {
            $sqlQuery = "INSERT INTO disc (disc_title , disc_year, disc_picture , disc_label , disc_genre , disc_price, artist_id) 
            VALUES (:disc_title , :disc_year, :disc_picture , :disc_label , :disc_genre , :disc_price, :artist_id)";
            $requete = $this->_con->prepare($sqlQuery);
            $requete->bindparam(':disc_title' , $title);
            $requete->bindparam(':disc_year' , $year);
            $requete->bindparam(':disc_picture' , $picture);
            $requete->bindparam(':disc_label' , $label);
            $requete->bindparam(':disc_genre' , $genre);
            $requete->bindparam(':disc_price' , $price);
            $requete->bindparam(':artist_id' , $artist);
            $requete->execute();
            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            return false;
        }   

    }

    public function update($id , $title , $year, $picture, $label, $genre, $price , $artist) {
        try {
        $sqlQuery = "UPDATE disc 
        SET disc_title = :disc_title ,
        disc_year = :disc_year,
        disc_picture = :disc_picture,
        disc_label = :disc_label,
        disc_genre = :disc_genre,
        disc_price = :disc_price,
        artist_id =  :artist_id
        WHERE disc_id = :disc_id";
        $requete = $this->_con->prepare($sqlQuery);
        $requete->bindparam(':disc_id' , $id);
        $requete->bindparam(':disc_title' , $title);
        $requete->bindparam(':disc_year' , $year);
        $requete->bindparam(':disc_picture' , $picture);
        $requete->bindparam(':disc_label' , $label);
        $requete->bindparam(':disc_genre' , $genre);
        $requete->bindparam(':disc_price' , $price);
        $requete->bindparam(':artist_id' , $artist);
        $requete->execute();
        return true;
        } catch (PDOException $e) {
        // echo $e->getMessage();
            return false;
        }    
    }
    public function updateWithoutPic($id , $title , $year, $label, $genre, $price , $artist) {
        try {
        $sqlQuery = "UPDATE disc 
        SET disc_title = :disc_title ,
        disc_year = :disc_year,
        disc_label = :disc_label,
        disc_genre = :disc_genre,
        disc_price = :disc_price,
        artist_id =  :artist_id
        WHERE disc_id = :disc_id";
        $requete = $this->_con->prepare($sqlQuery);
        $requete->bindparam(':disc_id' , $id);
        $requete->bindparam(':disc_title' , $title);
        $requete->bindparam(':disc_year' , $year);
        $requete->bindparam(':disc_label' , $label);
        $requete->bindparam(':disc_genre' , $genre);
        $requete->bindparam(':disc_price' , $price);
        $requete->bindparam(':artist_id' , $artist);
        $requete->execute();
        return true;
        } catch (PDOException $e) {
        // echo $e->getMessage();
            return false;
        }    
    }
    
}

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

    public function setDelete($id) {
        try {

            $delete = $this->_con->prepare("DELETE FROM disc WHERE disc_id = :disc_id");
            $delete->bindparam(":disc_id" , $disc_id);
            $delete->execute();
            return true;
            
        } catch (PDOException $e) {

            //echo $e->getMessage();
        }
    }
    
}
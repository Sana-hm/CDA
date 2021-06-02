
<?php
class Disc extends ModelParent {

        public function __construct() {
        $this->table = 'disc';

        $this->getConnection();
    }

    public function GetDiscByArtist () {
        
        $query = 'SELECT * FROM `disc` INNER JOIN `artist` on `disc`.`artist_id` = `artis`t.`id`' ;
    }


    
}
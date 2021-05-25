<?php
//utilise Query = on n'a pas de paramètre 
$requeteForm = $db->query("SELECT artist_id ,artist_name FROM artist");
$artists = $requeteForm->fetchAll(PDO::FETCH_OBJ);
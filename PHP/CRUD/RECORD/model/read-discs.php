<?php
$requete = $db->query("SELECT * FROM disc, artist WHERE disc.artist_id = artist.artist_id ORDER BY disc_id ");
$discs = $requete->fetchAll(PDO::FETCH_OBJ);
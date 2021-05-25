<?php
$id = $_GET['disc_id'];
$requete = $db->prepare("SELECT * FROM disc, artist WHERE disc.artist_id = artist.artist_id AND disc_id =:id ");
$requete->bindValue(":id" , $id);
$requete->execute();
$discs = $requete->fetchAll(PDO::FETCH_OBJ);
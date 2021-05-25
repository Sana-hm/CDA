<?php
include 'valid-control-form.php';
// défintion regex
$regex = [
    'title' =>'/^[A-Za-z0-9\s\-_,\.;:()]+$/',
    'artist' => '/^[0-9]+$/',
    'year' => '/^[0-9]{4}$/' ,
    'genre' => '/^[A-Za-z0-9\s\-_,\.;:()]+$/',
    'label' => '/^[A-Za-z0-9\s\-_,\.;:()]+$/',
    'price' => '/([1-9]|[1-9][0-9]|[1-9][0-9][0-9]|[1-9][0-9][0-9][0-9])/'
];
$validTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");
// si le formulaire est envoyé
 if ( isset($_POST['validate'])) {
     // si le formulaire est envoyé
    $formError = validForm($regex , $_POST);
    $fileError = validFile($validTypes, $_FILES);
   // s'il n'y a pas d'erreur 
    if(count($formError) === 0 && count($fileError)=== 0){
        $id = htmlspecialchars($_POST['id']);
        $title = htmlspecialchars($_POST['title']);
        $artist = htmlspecialchars($_POST['artist']);
        $year = htmlspecialchars($_POST['year']);
        $genre = htmlspecialchars($_POST['genre']);
        $label = htmlspecialchars($_POST['label']);
        $price = htmlspecialchars($_POST['price']);
        
        $extension = substr(strrchr($_FILES['fileToUpload']['name'], "."), 1);
        $target_dir = "../assets/img/";
        $picture = $title.'.'.$extension;
        $new_name = $target_dir.$picture;
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $new_name);
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
            $requete = $db->prepare($sqlQuery);
            $requete->bindparam(':disc_id' , $id);
            $requete->bindparam(':disc_title' , $title);
            $requete->bindparam(':disc_year' , $year);
            $requete->bindparam(':disc_picture' , $picture);
            $requete->bindparam(':disc_label' , $label);
            $requete->bindparam(':disc_genre' , $genre);
            $requete->bindparam(':disc_price' , $price);
            $requete->bindparam(':artist_id' , $artist);
            $requete->execute();
            header("Location:../");
        } catch (PDOException $e) {
            // echo $e->getMessage();
        }   
    }
     // s'il n'y a qu'une error pour modifier sans télécharger une nouvelle photo
    if (count($formError) === 0 && count($fileError) === 1 && $_FILES['fileToUpload']['error'] === 4 ){
            $id = htmlspecialchars($_POST['id']);
            $title = htmlspecialchars($_POST['title']);
            $artist = htmlspecialchars($_POST['artist']);
            $year = htmlspecialchars($_POST['year']);
            $genre = htmlspecialchars($_POST['genre']);
            $label = htmlspecialchars($_POST['label']);
            $price = htmlspecialchars($_POST['price']);
            
        try {
            $sqlQuery = "UPDATE disc 
                        SET disc_title = :disc_title ,
                        disc_year = :disc_year,
                        disc_label = :disc_label,
                        disc_genre = :disc_genre,
                        disc_price = :disc_price,
                        artist_id =  :artist_id
                        WHERE disc_id = :disc_id";
            $requete = $db->prepare($sqlQuery);
            $requete->bindparam(':disc_id' , $id);
            $requete->bindparam(':disc_title' , $title);
            $requete->bindparam(':disc_year' , $year);
            $requete->bindparam(':disc_label' , $label);
            $requete->bindparam(':disc_genre' , $genre);
            $requete->bindparam(':disc_price' , $price);
            $requete->bindparam(':artist_id' , $artist);
            $requete->execute();
            header("Location:../");
        } catch (PDOException $e) {
            // echo $e->getMessage();
        }
    }
}

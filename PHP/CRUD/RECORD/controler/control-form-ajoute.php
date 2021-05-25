<?php
include 'valid-control-form.php';
// défintion regex
$regex = [
    'title' =>'/^[A-Za-z0-9\s\-_,\.;:()]+$/',
    'artist' =>  '/^[0-9]$/' ,
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
    if(count($formError) === 0 && count($fileError)=== 0) {

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
            $sqlQuery = "INSERT INTO disc (disc_title , disc_year, disc_picture , disc_label , disc_genre , disc_price, artist_id) 
            VALUES (:disc_title , :disc_year, :disc_picture , :disc_label , :disc_genre , :disc_price, :artist_id)";
            $requete = $db->prepare($sqlQuery);
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
 }

//images
// $target_dir = "assets/img/"; //file pour enregistrer les images
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// // Vérifie si le fichier image est une image réelle ou une fausse image
// if(isset($_POST["validate"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
// if($check !== false) {
//         echo "Le fichier est une image - " . $check["mime"] . ".";
//         $uploadOk = 1;
// } else {
//         echo "Le fichier n'est pas une image.";
//          $uploadOk =0; 
//         }
// }
 
// // Vérifier si le fichier existe déjà
// if (file_exists($target_file)) {
//         echo "Sorry, file already exists.";
//         $uploadOk = 0;
//     }
    
// // Autoriser certains formats de fichiers  
//  if($imageFileType != "jpg" && $imageFileType != "png" 
//     && $imageFileType != "jpeg" && $imageFileType != "gif" ){
//         echo "Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
//         $uploadOk = 0;
//     }
    

// // Vérifie si $uploadOk est mis à 0 par une erreur
//     if ($uploadOk == 0) {
//         echo "Désolé, votre fichier n'a pas été téléversé.";
//     //si tout va bien, essayez de télécharger le fichier
//     } else {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//             echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " a été téléchargé.";
//         } else {
//             echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
//         }
//     }    

 

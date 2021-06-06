<?php
class Functions {


    function validForm($data) {

        $regex = [
            'title' =>'/^[A-Za-z0-9\s\-_,\.;:()]+$/',
            'artist' =>  '/^[0-9]$/' ,
            'year' => '/^[0-9]{4}$/' ,
            'genre' => '/^[A-Za-z0-9\s\-_,\.;:()]+$/',
            'label' => '/^[A-Za-z0-9\s\-_,\.;:()]+$/',
            'price' => '/([1-9]|[1-9][0-9]|[1-9][0-9][0-9]|[1-9][0-9][0-9][0-9])/'
        ];

        $formError = [];
        foreach($regex as $input_name => $regex_value) {
            if (!empty($data[$input_name])){
                if(!preg_match($regex_value , $data[$input_name])) {
                    $formError[$input_name] = 'Caractère non valide';
                }
                } else{
                $formError[$input_name] = 'Champs vide';
                }
        }
        return $formError;
    }

    function validFile($data) {

        $validTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

        $fileError = [];
        if ($data['fileToUpload']['error'] > 0){
            switch($data['fileToUpload']['error']){
                case UPLOAD_ERR_INI_SIZE:
                    $fileError['fileToUpload'] = "Le fichier téléchargé dépasse la directive upload_max_filesize dans php.ini";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $fileError['fileToUpload'] = "Le fichier téléchargé dépasse la directive MAX_FILE_SIZE spécifiée dans le formulaire HTML";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $fileError['fileToUpload'] = "Le fichier téléversé n'a été téléversé que partiellement";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $fileError['fileToUpload'] = "Aucun fichier n'a été téléversé";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $fileError['fileToUpload'] = "Absence d'un dossier temporaire";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $fileError['fileToUpload'] = "Échec de l'écriture du fichier sur le disque";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $fileError['fileToUpload'] = "Téléchargement de fichier arrêté par extension";
                    break;
            }
        } else {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $filetype = finfo_file($finfo, $data['fileToUpload']['tmp_name']);
            finfo_close($finfo);
            if (!in_array($filetype , $validTypes)) {
                $fileError['fileToUpload'] = "Le type de fichier n'est pas valid!";
            }
        }
        return $fileError;
    }
}
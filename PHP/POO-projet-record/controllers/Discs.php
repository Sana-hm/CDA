<?php

class Discs extends AbstractController {

    /** 
    *affichage de la list des disques
    */

    public function index() {

        $disc = $this->loadModel('Disc');
        $discList = $disc->getAll();
        $this->render('index' , [
            'discs' =>$discList
        ]);

    }

    /** 
    *affichage de la list des details
    */
    public function details($id) {

        $disc = $this->loadModel('Disc');
        $discs = $disc->getDetails($id);
        $this->render('details' , [
            'disc' => $discs
        ]);
    }


    /** 
    *affichage de file supprimer
    */
    public function delete($id) {

        $disc = $this->loadModel('Disc');
        $discs = $disc->getDetails($id);

        if(isset($_POST['supprim'])){

            $delete = $disc->delete($id);
            if($delete) {
                header('Location:/Discs/index');
                die;
            } else {
                $this->render('delete', [
                    'disc' => $discs
        
                ]);
            }

        } else {

            $this->render('delete', [
                'disc' => $discs
    
            ]);
        }
        
    }


    /** 
    *affichage de la list des modifies
    */
    public function update($id) {

        $disc = $this->loadModel('Disc');
        $discs = $disc->getDetails($id);

        $artist = $this->loadModel('Artist');
        $artists = $artist->getAll();

        if(isset($_POST['validate'])) {

            $function = $this->loadFunction();

            $formError = $function->validForm($_POST);
            $fileError = $function->validFile($_FILES);

            if(count($formError) === 0 && count($fileError) === 0) {

                $id = htmlspecialchars($_POST['id']);
                $title = htmlspecialchars($_POST['title']);
                $artist = htmlspecialchars($_POST['artist']);
                $year = htmlspecialchars($_POST['year']);
                $genre = htmlspecialchars($_POST['genre']);
                $label = htmlspecialchars($_POST['label']);
                $price = htmlspecialchars($_POST['price']);
                
                $extension = substr(strrchr($_FILES['fileToUpload']['name'], "."), 1);
                $target_dir = ROOT. "/assets/img/";
                $picture = $title.'.'.$extension;
                $new_name = $target_dir.$picture;
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $new_name);

                $disc = $this->loadModel('Disc');
                $update = $disc->update($id ,$title , $year, $picture, $label, $genre, $price , $artist);

                if($update)
                {
                    header('Location:/Discs/index');
                    die;

                } else
                {
                    $this->render('update', [
                        'artists' => $artists,
                        'formError' => $formError,
                        'fileError' => $fileError,
                       ]);
    
                }


            } else if (count($formError) === 0 && count($fileError) === 1 && $_FILES['fileToUpload']['error'] === 4){
                
                $id = htmlspecialchars($_POST['id']);
                $title = htmlspecialchars($_POST['title']);
                $artist = htmlspecialchars($_POST['artist']);
                $year = htmlspecialchars($_POST['year']);
                $genre = htmlspecialchars($_POST['genre']);
                $label = htmlspecialchars($_POST['label']);
                $price = htmlspecialchars($_POST['price']);
                
                $disc = $this->loadModel('Disc');
                $update = $disc->updateWithoutPic($id ,$title , $year, $label, $genre, $price , $artist);

                if($update)
                {
                    header('Location:/Discs/index');
                    die;

                } else
                {
                    $this->render('update', [
                        'artists' => $artists,
                        'formError' => $formError,
                        'fileError' => $fileError,
                       ]);
    
                }

            } else {

                $this->render('update', [
                    'artists' => $artists,
                    'disc' => $discs,
                    'formError' => $formError,
                    'fileError' => $fileError,
                   ]);

            }


        } else {
            
            $this->render('update' , [
            'artists' => $artists ,
            'disc' => $discs
        ]);
        }

    }


    /** 
    *affichage de la list des ajoutes
    */

    public function add() {

        $artist = $this->loadModel('Artist');
        $artists = $artist->getAll();

        if(isset($_POST['validate'])) {

            $function = $this->loadFunction();

            $formError = $function->validForm($_POST);
            $fileError = $function->validFile($_FILES);

            if(count($formError) === 0 && count($fileError) === 0) {

                $title = htmlspecialchars($_POST['title']);
                $artist = htmlspecialchars($_POST['artist']);
                $year = htmlspecialchars($_POST['year']);
                $genre = htmlspecialchars($_POST['genre']);
                $label = htmlspecialchars($_POST['label']);
                $price = htmlspecialchars($_POST['price']);
                
                $extension = substr(strrchr($_FILES['fileToUpload']['name'], "."), 1);
                $target_dir = ROOT. "/assets/img/";
                $picture = $title.'.'.$extension;
                $new_name = $target_dir.$picture;
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $new_name);

                $disc = $this->loadModel('Disc');
                $add = $disc->add($title , $year, $picture, $label, $genre, $price , $artist);

                if($add)
                {
                    header('Location:/Discs/index');
                    die;

                } else
                {
                    $this->render('add', [
                        'artists' => $artists,
                        'formError' => $formError,
                        'fileError' => $fileError,
                       ]);
    
                }


            } else {

                $this->render('add', [
                    'artists' => $artists,
                    'formError' => $formError,
                    'fileError' => $fileError,
                   ]);

            }


        } else {
            
            $this->render('add', [
             'artists' => $artists
            ]);
        }

    }


}
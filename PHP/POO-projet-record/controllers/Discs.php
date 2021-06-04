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
            'discs' => $discs
        ]);
    }


    /** 
    *affichage de file supprimer
    */
    public function delete($id) {

        $disc= $this->loadModel('Disc');
        $result = $disc->setDelete($id);
        $this->render('delete', [
            'id' => $this->id();

        ]);
    }


    /** 
    *affichage de la list des modifies
    */
    public function update($id) {

        $disc = $this->loadModel('Disc');
        $discsUpdate = $disc->getUpdate($id);
        $this->render('update', [
            'discs' => $discsUpdate;

        ]);
    }


    /** 
    *affichage de la list des ajoutes
    */

    public function add() {

        $disc = $this->loadMessage('Disc');
        $discsAdd = $disc->setAdd();
        $this->render('add' , [
            'discs' => $discsAdd;
        
      ]);
    }


}
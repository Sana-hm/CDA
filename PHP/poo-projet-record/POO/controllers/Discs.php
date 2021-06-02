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
    public function discDetail($id) {
        $discs = $this->liadmpdel('Disc');
        $discDetail;
        $this->render();
    }

}
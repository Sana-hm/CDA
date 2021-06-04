<?php

class Home extends AbstractController{

    public function __construct() {

    }

    public function index() {
        $this->render('home');
    }
}
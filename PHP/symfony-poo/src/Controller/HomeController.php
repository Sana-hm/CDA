<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @Route("/")
 */

class HomeController extends AbstractController  {
    /**
     * @Route("/", name="home") 
     */

    public function index() :Response {

          // affichage de la page d'accueil
        return $this->render('home/index.html.twig');
    }


    /**
     * @return Response
     * @Route("/page2", name="secondPage")
     */

    public function page() :Response {

        // affichage de la page 2ème
        return $this->render('home/page.html.twig');
    }
}

?>
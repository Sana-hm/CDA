<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * class HomeController
 * @Route("/")
 */

class HomeController extends AbstractController {

    public function index() :Response {

        /**
         * @Route ("/", name="home")
         */

        return $this->render('home/index.html.twig');
    }
}
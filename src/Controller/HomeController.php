<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class HomeController extends Controller {

        public function index() {

            return $this -> render("index.html.twig");

        }

    }
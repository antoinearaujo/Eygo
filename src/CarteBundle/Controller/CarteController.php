<?php

namespace CarteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarteController extends Controller
{
    public function carteAction()
    {
        return $this->render('CarteBundle:Carte:carte.html.twig');
    }
}

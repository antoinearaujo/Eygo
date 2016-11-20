<?php

namespace HoraireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HoraireController extends Controller
{
    public function horaireAction()
    {
        return $this->render('HoraireBundle:Horaire:horaire.html.twig');
    }
}

<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomePageController extends Controller
{
    public function adminAction()
    {
        return $this->render('AdminBundle:HomePage:admin.html.twig');
    }
}

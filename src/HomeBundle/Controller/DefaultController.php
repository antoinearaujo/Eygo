<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Form\ImageType;

class DefaultController extends Controller
{
 

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AdminBundle:Article');

        $sheets = $repository->getAll();

        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('AdminBundle:ArticleNoImg');

        $sheetnoimgs = $repository2->getAll();
        

   return $this->render('HomeBundle:Default:index.html.twig', array('sheets' => $sheets,'sheetnoimgs' => $sheetnoimgs) );

    }

}

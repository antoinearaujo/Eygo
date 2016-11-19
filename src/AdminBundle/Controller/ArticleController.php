<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\Article;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AdminBundle\Form\ImageType;

class ArticleController extends Controller
{
   public function ajoutAction(Request $request)
    {

      $form = $this->createFormBuilder(new Article())
           ->add('Name')
           ->add('message')
           ->add('image',      new ImageType())
           ->add('submit','submit')
           ->getForm();

        $form->handleRequest($request);

        if ($request->isMethod('post')&& $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em-> persist($form->getData());
            $em->flush();

            return $this->redirect($this->generateUrl('home'));
        }
      return $this->render('AdminBundle:Article:ajout.html.twig', array('form' => $form->createView()));
    }
}

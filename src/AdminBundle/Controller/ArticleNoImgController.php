<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\ArticleNoImg;
use AdminBundle\Entity\Delete;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ArticleNoImgController extends Controller
{
   



     public function ajoutAction(Request $request)
    {

      $form = $this->createFormBuilder(new ArticleNoImg())
           ->add('Name')
           ->add('message')
           ->add('submit','submit')
           ->getForm();

        $form->handleRequest($request);

        if ($request->isMethod('post')&& $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em-> persist($form->getData());
            $em->flush();

            return $this->redirect($this->generateUrl('home_homepage'));
        } 
      return $this->render('AdminBundle:ArticleNoImg:ajout.html.twig', array('form' => $form->createView()));
    }


 public function deleteAction($id, Request $request)
    {
      $form = $this->createFormBuilder(new Delete())
           ->add('Name')
           ->add('raison')
           ->add('submit','submit')
           ->getForm();

        $form->handleRequest($request);
     



        if ($request->isMethod('post')&& $form->isValid()){

         $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminBundle:ArticleNoImg')->find($id);
 
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comment entity.');
            }
 
            $em->remove($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('home_homepage'));

          
        }
         return $this->render('AdminBundle:ArticleNoImg:delete.html.twig', array('form' => $form->createView()));
    }

}

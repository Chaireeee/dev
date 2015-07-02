<?php

namespace Chaire\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('ChaireAccueilBundle:Highlight')->findByActivated(1);



        return $this->render('ChaireAccueilBundle:Default:index.html.twig',array('highlights'=>$entities));
    }

    public function setlangageenAction($path)
    {
        $this->get('session')->set('_locale', 'en_UK');




        return $this->redirect($this->generateUrl($path));
    }

    public function setlangagenativeAction($path)
    {
        $this->get('session')->set('_locale', 'fr_FR');
       return $this->redirect($this->generateUrl($path ));
    }

    public function accompagnementAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('ChaireAccueilBundle:Accompagnement');
        $accompagnement = $repository->findAll();

        $loc=$this->get('request')->getLocale();



        return $this->render('ChaireAccueilBundle:Accompagnement:viewacc.html.twig',array('loc'=>$loc,'accompagnement'   => $accompagnement,'page_active'=>4));





    }
}

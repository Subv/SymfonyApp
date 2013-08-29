<?php

namespace Trinity\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

class DefaultController extends FOSRestController
{
    /**
    * @Route("/{name}", defaults={"name" = "Sebas"})
    */
    public function indexAction($name)
    {
        return $this->render('TrinityAppBundle:Default:index.html.twig', array('name' => $name));
    }
    
    /**
     * @Rest\View()
     * @Route("/show/")
    */
    public function showAction()
    {
        $users = $this->getDoctrine()->getRepository("TrinityAppBundle:Account")->findAll();
                        
        return array("users" => $users);
    }
}

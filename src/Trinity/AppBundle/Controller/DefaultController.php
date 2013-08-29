<?php

namespace Trinity\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Trinity\AppBundle\Entity\Account;

class DefaultController extends FOSRestController
{
    /**
     * @Route("/users")
     * @Rest\View()
     */
    public function usersAction()
    {
        $users = $this->getDoctrine()->getRepository("TrinityAppBundle:Account")->findAll();

        return array("users" => $users);
    }

    /**
     * @Route("/user/{id}")
     * @Rest\View()
     */
    public function userAction($id)
    {
        $user = $this->getDoctrine()->getRepository("TrinityAppBundle:Account")->find($id);
        if (!$user instanceof Account) {
            throw new NotFoundHttpException("User not found");
        }

        return array("user" => $user);
    }

    /**
     * @Route("/{name}", defaults={"name" = "Sebas"})
     */
    public function indexAction($name)
    {
        return $this->render('TrinityAppBundle:Default:index.html.twig', array('name' => $name));
    }
}

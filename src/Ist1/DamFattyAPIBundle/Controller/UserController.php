<?php

namespace Ist1\DamFattyAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{
    /**
     * @Route("/users/{email}", name="users_get_user", requirements={"email"=".+"})
     * @Method({"GET"})
     */
    public function getUserAction($email)
    {
        $response = new Response();
        $user = array(
            'email' => $email,
            'name' => $email
        );

        $response->setStatusCode(Response::HTTP_OK);
        $response->setContent(json_encode($user));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}

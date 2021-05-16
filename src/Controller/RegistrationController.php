<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    
    /**
     * @Route("/registration", name="registration")
     */
    public function index(Request $request): Response
    {
        $username = $request->get('username');
        $email = $request->get('email');
        $password = $request->get('password');
        return null;

    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    /**
<<<<<<< HEAD
     * @Route("/login", name="app_login")
     */

    public function index(AuthenticationUtils $authenticationUtils): Response
=======
     * @Route("/connexion", name="app_login")
     */

    public function login(AuthenticationUtils $authenticationUtils): Response
>>>>>>> 8f3d7c82d0014fc6cfd282d635cfe36cf0d3a3d4

    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', [
<<<<<<< HEAD
            'controller_name' => 'LoginController',
=======
            'page_title' => 'Connexion',
>>>>>>> 8f3d7c82d0014fc6cfd282d635cfe36cf0d3a3d4
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }
<<<<<<< HEAD
=======
    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
>>>>>>> 8f3d7c82d0014fc6cfd282d635cfe36cf0d3a3d4
}

<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/api/login", name="api_login")
     */
  class ApiLoginController extends AbstractController
  {
     public function index(){

         if (null === $user) {
             return $this->json([
                 'message' => "L'utilisateur n'existe pas",
            ], Response::HTTP_UNAUTHORIZED);
         }

          return $this->json([
             'message' => 'Welcome to your new controller!',
             'path' => 'src/Controller/ApiLoginController.php',
             'user'  => $user->getUserIdentifier(),
             'token' => $token,
          ]);
      }
  }

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{

    function Accueil()
    {
        $user = 1;
        return $this->render('index.html.twig', [
            'page_title' => 'Accueil',
            'user' => $user,
        ]);
    }
}

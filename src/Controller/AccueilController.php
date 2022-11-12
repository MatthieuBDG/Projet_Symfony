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
<<<<<<< HEAD
        return $this->render('index.html.twig', [
=======
        return $this->render('pages/accueil.html.twig', [
>>>>>>> 8f3d7c82d0014fc6cfd282d635cfe36cf0d3a3d4
            'page_title' => 'Accueil',
        ]);
    }
}

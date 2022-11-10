<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Nouveau_Intervenant extends AbstractController
{

     /**
     * @Route("/nouveau/intervenant", name="new_intervenant")
     */
    function index()
    {
        $user = 1;
        return $this->render('pages/nouveau_intervenant.html.twig', [
            'page_title' => 'Nouveau intervenant',
        ]);
    }
}

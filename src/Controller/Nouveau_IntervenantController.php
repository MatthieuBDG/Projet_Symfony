<?php

namespace App\Controller;

use App\Entity\User;

use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class Nouveau_IntervenantController extends AbstractController
{
    /**
     * @Route("/nouveau/intervenant", name="app_register")
     * 
     
     */
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMINISTRATION');
        $user = new User();
        
        $form = $this->createForm(RegistrationFormType::class, $user);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_INTERVENANT']);
            $user->setMatiere($form->get('matiere')->getData()); // set the selected
            $user->setPassword($userPasswordHasher->hashPassword($user, $form->get('plainPassword')->getData()));
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_register');
        }

        return $this->render('pages/nouveau_intervenant.html.twig', [
            'registrationForm' => $form->createView(),
            'page_title' => 'Nouveau Intervenant',
        ]);
    }
}

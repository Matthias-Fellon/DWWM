<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    #[Route('/ajouter', name: 'app_ajouter')]
    public function ajouter(): Response
    {
        return $this->render('utilisateur/ajouter.html.twig', [
            'titre' => 'Ajouter',
        ]);
    }

    #[Route('/voir', name: 'app_voir')]
    public function voir(): Response
    {
        return $this->render('utilisateur/afficher.html.twig', [
            'titre' => 'Voir les utilisateurs',
        ]);
    }

    #[Route('/modifier', name: 'app_modifier')]
    public function modifier(): Response
    {
        return $this->render('utilisateur/update.html.twig', [
            'titre' => 'Modifier',
        ]);
    }

    #[Route('/supprimer', name: 'app_supprimer')]
    public function supprimer(): Response
    {
        return $this->render('utilisateur/delete.html.twig', [
            'titre' => 'Supprimer',
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('utilisateur/login.html.twig', [
            'titre' => 'Login',
        ]);
    }
}

<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginAdminController extends AbstractController
{
    #[Route('/admin/login', name: 'app_login_admin')]
    public function index(AuthenticationUtils $authenticationUtils)
    {
        if ($this->getUser() && in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('app_admin');
        }
        // Pegar o último erro de autenticação (se houver)
        $error = $authenticationUtils->getLastAuthenticationError();

        // Último email inserido pelo usuário
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->redirectToRoute('app_admin');

        return $this->render('admin/pages/login_admin/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/admin/logout', name: 'app_admin_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}

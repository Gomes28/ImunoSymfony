<?php

namespace App\Controller\admin;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[IsGranted('ROLE_ADMIN')]
class UserController extends AbstractController
{
    #[Route('/admin/user', name: 'app_admin_user')]
    public function index(UserRepository $user): Response
    {
        $users = $user->findAll();
        return $this->render('admin/pages/user/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/admin/user/{id}', name: 'app_admin_user_id')]
    public function Id($id, UserRepository $user): Response
    {
        $users = $user->find($id);
        return $this->render('admin/pages/user/id.html.twig', [
            'users' => $users,
        ]);
    }
}

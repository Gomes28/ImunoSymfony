<?php

namespace App\Controller\admin;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/pages/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/list', name: 'app_admin_list')]
    public function list(UserRepository $userRepository): Response
    {
        $admins = $userRepository->findBy(['roles' => '["ROLE_ADMIN"]']);

        dd($admins);
        return $this->render('admin/pages/admin/index.html.twig', [
            'admins' => $admins,
        ]);
    }
}

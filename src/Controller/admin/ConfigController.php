<?php

namespace App\Controller\admin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[IsGranted('ROLE_ADMIN')]
class ConfigController extends AbstractController
{

    #[Route('/edit', name: 'app_config')]
    public function index(): Response
    {
        return $this->render('admin/config/index.html.twig', [
            'controller_name' => 'ConfigController',
        ]);
    }
}

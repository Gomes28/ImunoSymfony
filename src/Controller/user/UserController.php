<?php

namespace App\Controller\user;

use App\Entity\Buy;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\BuyRepository;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/signup', name: 'app_user_register')]
    public function register(Request $resquest, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($resquest);
        $user->setRoles(['ROLE_USER']);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_login');
        }

        return $this->render('front/registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/minhas-compras', name: 'app_user_minhas_compras')]
    #[IsGranted('ROLE_USER')]
    public function Compras(Request $request, BuyRepository $buyRepository, ProductsRepository $productsRepository): Response
    {
        $idUsuario = $this->getUser()->getId();
        $compras = $buyRepository->findBy(['user' => $idUsuario]);

        return $this->render('front/page/cliente.html.twig', [
            'compras' => $compras
        ]);
    }
}

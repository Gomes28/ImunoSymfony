<?php

namespace App\Controller\admin;

use App\Entity\User;
use App\Form\AdminType;
use App\Repository\BuyRepository;
use App\Repository\SchoolVacinRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(BuyRepository $buyRepository, UserRepository $userRepository, SchoolVacinRepository $schoolVacinRepository): Response
    {
        $buy = $buyRepository->findBy([], [], 10);

        return $this->render('admin/pages/index.html.twig', [
            'buys' => $buy
        ]);
    }

    public function values(BuyRepository $buyRepository, UserRepository $userRepository, SchoolVacinRepository $schoolVacinRepository): Response
    {
        $buys = $buyRepository->findBy(['status' => 'approved']);

        $totalSales = 0;

        foreach ($buys as $buy) {
            $totalSales += $buy->getTotalPayment();
        }

        $users = $userRepository->createQueryBuilder('u')
            ->where('u.roles LIKE :roles')
            ->setParameter('roles', '%ROLE_USER%')
            ->getQuery()
            ->getResult();

        $parceiros = $schoolVacinRepository->createQueryBuilder('u')
            ->where('u.Status LIKE :Status')
            ->setParameter('Status', '%ATIVO%')
            ->getQuery()
            ->getResult();

        return $this->render('admin/components/card.html.twig', [
            'users' => $users,
            'totalSales' => $totalSales,
            'parceiros' => $parceiros
        ]);
    }
    #[Route('/admin/list', name: 'app_admin_list')]
    public function list(UserRepository $userRepository): Response
    {
        $admins = $userRepository->createQueryBuilder('u')
            ->where('u.roles LIKE :roles')
            ->setParameter('roles', '%ROLE_ADMIN%')
            ->getQuery()
            ->getResult();

        return $this->render('admin/pages/admin/index.html.twig', [
            'admins' => $admins,
        ]);
    }

    #[Route('/admin/user/delete/{id}', name: 'app_admin_delete')]
    public function deleteUser(UserRepository $userRepository, EntityManagerInterface $entityManager, $id): Response
    {
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Admin não encontrado');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin_list');
    }

    #[Route('/admin/edit/{id}', name: 'app_admin_edit')]
    public function edit(UserRepository $userRepository, Request $request,
                         UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, $id): Response
    {
        $user = $userRepository->find($id);
        $form = $this->createForm(AdminType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager->flush();

            return $this->redirectToRoute('app_admin_list');
        }

        return $this->render('admin/pages/admin/edit.html.twig', [
            'AdminForm' => $form,
            'user' => $user,
        ]);
    }

    #[Route('/admin/new', name: 'app_admin_new')]
    public function new(UserRepository $userRepository, Request $request,
    UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(AdminType::class, $user);
        $form->handleRequest($request);
        $user->setRoles(['ROLE_ADMIN']);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_list');
        }

        return $this->render('admin/pages/admin/new.html.twig', [
            'AdminForm' => $form,
        ]);
    }
}

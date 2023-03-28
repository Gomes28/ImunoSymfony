<?php

namespace App\Controller\admin;

use App\Entity\Category;
use App\Form\CategoryFormType;
use App\Repository\CategoryRepository;
use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[IsGranted('ROLE_ADMIN')]
class CategoryController extends AbstractController
{
    #[Route('/admin/category', name: 'app_category_index')]
    public function index(CategoryRepository $category): Response
    {
        return $this->render(
            'admin/pages/category/category.html.twig',
            [
                'categories' => $category->findAll(),
            ]
        );
    }

    #[Route('/admin/category/new', name: 'app_category_add')]
    public function new(CategoryRepository $categorys, Request $request): Response
    {
        $category = new Category();
        $CategoryForm = $this->createForm(CategoryFormType::class, new Category());
        $CategoryForm->handleRequest($request);

        if($CategoryForm->isSubmitted() && $CategoryForm->isValid()){
            $uploadedFile = $CategoryForm['imageFile']->getData();
            if ($uploadedFile) {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads/categorys';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
            $category->setName($CategoryForm['name']->getData());
            $category->setDescription($CategoryForm['description']->getData());
            $category->setImageFilename($newFilename);

            $categorys->save($category, true);
                }

            return $this->redirectToRoute('app_category_index');
        }
        return $this->render('admin/pages/category/new_category.html.twig',[
            'CategoryForm' => $CategoryForm
        ]);
    }
}

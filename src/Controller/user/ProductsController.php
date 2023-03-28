<?php

namespace App\Controller\user;

use App\Entity\BuyVacin;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    public function index(ProductsRepository $productsRepository): Response
    {
        $products = $productsRepository->findAll();
        return $this->render('front/components/_productsList.html.twig', [
            'products' => $products
        ]);
    }

    #[Route('/product/{id}', name: 'app_product_id', methods: ['GET', 'POST'])]
    public function FindId(ProductsRepository $productsRepository, $id): Response
    {
        $product = $productsRepository->find($id);

        return $this->render('front/page/ProductById.html.twig', [
            'products' => [$product]
        ]);
    }
}

<?php

namespace App\Controller\user;

use App\Entity\BuyVacin;
use App\Repository\ProductsRepository;
use App\Repository\SchoolVacinRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    public function index(ProductsRepository $productsRepository): Response
    {
        $products = $productsRepository->createQueryBuilder('u')
            ->where('u.Status LIKE :status')
            ->andWhere('u.promotionSistem IS NULL')
            ->setParameter('status', '%"ATIVO"%')
            ->getQuery()
            ->getResult();

        return $this->render('front/components/_productsList.html.twig', [
            'products' => $products
        ]);
    }

    #[Route('/product/{id}', name: 'app_product_id', methods: ['GET', 'POST'])]
    public function FindId(ProductsRepository $productsRepository, $id, SchoolVacinRepository $schoolVacinRepository): Response
    {
        $product = $productsRepository->find($id);

        $productID = $product->getPromotionSistem();

        if (is_null($productID)){
            return $this->render('front/page/ProductById.html.twig', [
                'products' => [$product],
            ]);
        } else {
            return $this->redirectToRoute('app_page');
        }
    }
}

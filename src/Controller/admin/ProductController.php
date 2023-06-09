<?php

namespace App\Controller\admin;

use App\Entity\Products;
use App\Form\ProductType;
use App\Entity\Product;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Gedmo\Sluggable\Util\Urlizer;

#[IsGranted('ROLE_ADMIN')]
class ProductController extends AbstractController
{
    #[Route('/admin/product', name: 'app_product_index')]
    public function index(ProductsRepository $product): Response
    {
        $products = $product->createQueryBuilder('u')
            ->andWhere('u.promotionSistem IS NULL')
            ->getQuery()
            ->getResult();

        return $this->render('admin/pages/product/index.html.twig', [
            'products' => $products
        ]);
    }

    #[Route('/admin/product/status/{id}', name: 'app_product_status')]
    public function status(Request $request, ProductsRepository $product, $id): Response
    {
        $promotion = $product->find($id);

        if (!$promotion) {
            throw $this->createNotFoundException('Produto não encontrada');
        }

        $status = $promotion->getStatus();

        if ($status == ['ATIVO']) {
            $promotion->setStatus(['INATIVO']);
        } else if ($status == ['INATIVO']) {
            $promotion->setStatus(['ATIVO']);
        }

        $product->save($promotion, true);

        return $this->redirectToRoute('app_product_index');
    }

    #[Route('/admin/product/new', name: 'app_product_new')]
    public function new(ProductsRepository $product, Request $request, EntityManagerInterface $em): Response
    {
        $products = new Products();
        $form = $this->createForm(ProductType::class, $products);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var__ UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile) {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads/products';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $products->setName($form['name']->getData());
                $products->setPrice($form['price']->getData());
                $products->setDescription($form['description']->getData());
                $products->setImageFilename($newFilename);
                $products->setCategory($form['category']->getData());
                $products->setStatus(["ATIVO"]);
                $product->save($products, true);
            }}

        return $this->render('admin/pages/product/new.html.twig', [
            'ProductForm' => $form
        ]);
    }
}

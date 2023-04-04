<?php

namespace App\Controller\admin;

use App\Entity\BuyTime;
use App\Entity\Products;
use App\Entity\PromotionSistem;
use App\Form\BuyTimeType;
use App\Form\ProductType;
use App\Form\PromotionSistemType;
use App\Repository\BuyRepository;
use App\Repository\BuyTimeRepository;
use App\Repository\ProductsRepository;
use App\Repository\PromotionSistemRepository;
use Gedmo\Sluggable\Util\Urlizer;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

#[IsGranted('ROLE_ADMIN')]
class PromotionSistemController extends AbstractController
{
    #[Route('/admin/promotion/new', name: 'app_promotion_new')]
    public function new(Request $request, PromotionSistemRepository $promotionSistemRepository): Response
    {
        $promotion = new PromotionSistem();
        $form = $this->createForm(PromotionSistemType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile) {
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/banner';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = Urlizer::urlize($originalFilename) . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $promotion->setName($form['name']->getData());
                $promotion->setDescription($form['description']->getData());
                $promotion->setSchool($form['school']->getData());
                $promotion->setStatus(['ATIVO']);
                $promotion->setImageFilename($newFilename);
                $promotionSistemRepository->save($promotion, true);
            }
        }

        return $this->render('admin/pages/promotion_sistem/new.html.twig', [
            'PromotionForm' => $form,
        ]);
    }

    #[Route('/admin/promotion/status/{id}', name: 'app_promotion_status')]
    public function status(Request $request, PromotionSistemRepository $promotionSistemRepository, $id): Response
    {
        $promotion = $promotionSistemRepository->find($id);

        if (!$promotion) {
            throw $this->createNotFoundException('Promotion não encontrada');
        }

        $status = $promotion->getStatus();

        if ($status == ['ATIVO']) {
            $promotion->setStatus(['INATIVO']);
        } else if ($status == ['INATIVO']) {
            $promotion->setStatus(['ATIVO']);
        }

        $promotionSistemRepository->save($promotion, true);

        return $this->redirectToRoute('app_promotion_list');
    }

    #[Route('/admin/promotion/list', name: 'app_promotion_list')]
    public function list(PromotionSistemRepository $promotionSistemRepository): Response
    {
        $promotion = $promotionSistemRepository->findAll();
        return $this->render('admin/pages/promotion_sistem/index.html.twig', [
            'promotion' => $promotion,
        ]);
    }

    #[Route('/admin/promotion/{id}', name: 'app_promotion_id')]
    public function id($id, PromotionSistemRepository $promotionSistemRepository): Response
    {
        $promotion = $promotionSistemRepository->find($id);

        if (!$promotion) {
            throw $this->createNotFoundException('Promotion not found');
        }

        return $this->render('admin/pages/promotion_sistem/id.html.twig', [
            'promotion' => $promotion,
        ]);
    }

    // PRODUCT \\

    #[Route('/admin/promotion/new/product/{id}', name: 'app_promotion_new_product')]
    public function productNew($id, PromotionSistemRepository $promotionSistemRepository, Request $request, ProductsRepository $product): Response
    {
        $promotion = $promotionSistemRepository->find($id);

        if (!$promotion) {
            throw $this->createNotFoundException('Promotion not found');
        }

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
                $products->setPromotionSistem($promotion);
                $products->setCategory($form['category']->getData());
                $products->setStatus(["ATIVO"]);
                $product->save($products, true);
            }}

        return $this->render('admin/pages/promotion_sistem/Products/new.html.twig', [
            'ProductForm' => $form
        ]);
    }

    #[Route('/admin/promotion/product/{id}', name: 'app_admin_promotion_product')]
    public function listproduct($id, ProductsRepository $product, PromotionSistemRepository $promotionSistemRepository,): Response
    {
        $promotion = $promotionSistemRepository->find($id);

        $products = $product->createQueryBuilder('u')
            ->andWhere('u.promotionSistem = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

        return $this->render('admin/pages/promotion_sistem/Products/index.html.twig', [
            'products' => $products,
            'promotion' => $promotion
        ]);
    }

    // TIME \\

    #[Route('/admin/promotion/time/new/{id}', name: 'app_admin_promotion_time_new')]
    public function newTime($id, Request $request, BuyTimeRepository $buyTimeRepository, PromotionSistemRepository $promotionSistemRepository,): Response
    {
        $promotion = $promotionSistemRepository->find($id);

        if (!$promotion) {
            throw $this->createNotFoundException('Promotion not found');
        }

        $time = new BuyTime();
        $form = $this->createForm(BuyTimeType::class, $time);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $time->setDay($form['Day']->getData());
                $time->setPromotionId($promotion);
                $buyTimeRepository->save($time, true);
            }

        return $this->render('admin/pages/promotion_sistem/time/new.html.twig', [
            'TimeForm' => $form,
            'promotion' => $promotion
        ]);
    }

    #[Route('/admin/promotion/time/edit/{id}', name: 'app_admin_promotion_time_edit')]
    public function editTime($id, Request $request, BuyTimeRepository $buyTimeRepository): Response
    {
        $time = $buyTimeRepository->find($id);

        if (!$time) {
            throw $this->createNotFoundException('Time not found');
        }

        $form = $this->createForm(BuyTimeType::class, $time);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $time->setDay($form['Day']->getData());
            $buyTimeRepository->save($time, true);

            $this->addFlash('success', 'Time updated successfully');
            return $this->redirectToRoute('app_admin_promotion_time_list');
        }

        return $this->render('admin/pages/promotion_sistem/time/edit.html.twig', [
            'TimeForm' => $form->createView(),
            'time' => $time,
        ]);
    }

    #[Route('/admin/promotion/time/{id}', name: 'app_admin_promotion_time')]
    public function listtime($id, BuyTimeRepository $buyTimeRepository, PromotionSistemRepository $promotionSistemRepository,): Response
    {
        $promotion = $promotionSistemRepository->find($id);

        $time = $buyTimeRepository->createQueryBuilder('u')
            ->andWhere('u.PromotionId = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

        return $this->render('admin/pages/promotion_sistem/time/index.html.twig', [
            'time' => $time,
            'promotion' => $promotion
        ]);
    }

    // BUY \\

    #[Route('/admin/promotion/buy/list/{id}', name: 'app_admin_promotion_buy_list')]
    public function ListBuy($id, Request $request, BuyRepository $buyRepository, PromotionSistemRepository $promotionSistemRepository): Response
    {
            $promotion = $promotionSistemRepository->find($id);

            $buys = $buyRepository->findBy(['promotionSistem' => $id]);

        return $this->render('admin/pages/promotion_sistem/buy/listbuy.html.twig', [
            'buys' => $buys,
            'promotion' => $promotion
        ]);
    }

    #[Route('/admin/promotion/buy/export/{id}', name: 'app_admin_promotion_buy_export')]
    public function export($id, BuyRepository $buyRepository, PromotionSistemRepository $promotionSistemRepository): Response
    {
        $promotion = $promotionSistemRepository->find($id);

        $buys = $buyRepository->findBy(['promotionSistem' => $id]);

        // Create a new spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Get the active worksheet
        $worksheet = $spreadsheet->getActiveSheet();

        // Add column headers
        $worksheet->setCellValue('A1', 'ID');
        $worksheet->setCellValue('B1', 'Nome');
        $worksheet->setCellValue('C1', 'Email');
        $worksheet->setCellValue('D1', 'Status');
        $worksheet->setCellValue('E1', 'Outros');
        $worksheet->setCellValue('F1', 'Quantidade');

        // Add the buy data to the worksheet
        $row = 2;
        foreach ($buys as $buy) {
            $worksheet->setCellValue('A' . $row, $buy->getId());
            $worksheet->setCellValue('B' . $row, $buy->getUser()->getName());
            $worksheet->setCellValue('C' . $row, $buy->getUser()->getEmail());
            $worksheet->setCellValue('D' . $row, $buy->getStatus());
            $worksheet->setCellValue('E' . $row, $buy->getBuyVacin()->getOthersVacinated());
            $worksheet->setCellValue('F' . $row, $buy->getBuyVacin()->getQuantity());
            $row++;
        }

        // Create a new Xlsx writer object
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

        // Create a new response object
        $response = new Response();

        // Set the response headers to download the file
        $disposition = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, 'buysPromotion.xlsx');
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', $disposition);

        // Write the spreadsheet data to a temporary file
        $filePath = tempnam(sys_get_temp_dir(), 'buy Promotion');
        $writer->save($filePath);

        // Set the file contents as the response body
        $response->setContent(file_get_contents($filePath));

        // Delete the temporary file
        unlink($filePath);

        return $response;
    }
}

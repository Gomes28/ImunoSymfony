<?php

namespace App\Controller\admin;

use App\Repository\BuyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class BuyController extends AbstractController
{
    #[Route('/admin/buy/list', name: 'app_admin_buy_list')]
    public function index(Request $request, BuyRepository $buyRepository): Response
    {
        $query = $request->query->get('q');
        $buys = [];

        if ($query) {
            $buys = $buyRepository->searchByMpId($query);
        } else {
            $buys = $buyRepository->findAll();
        }

        return $this->render('admin/pages/buy/index.html.twig', [
            'buys' => $buys,
        ]);
    }

    #[Route('/admin/buy/export', name: 'app_admin_buy_export')]
    public function export(BuyRepository $buyRepository): Response
    {
        $buys = $buyRepository->findAll();

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
        $writer = new Xlsx($spreadsheet);

        // Create a new response object
        $response = new Response();

        // Set the response headers to download the file
        $disposition = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, 'buys.xlsx');
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', $disposition);

        // Write the spreadsheet data to a temporary file
        $filePath = tempnam(sys_get_temp_dir(), 'buys');
        $writer->save($filePath);

        // Set the file contents as the response body
        $response->setContent(file_get_contents($filePath));

        // Delete the temporary file
        unlink($filePath);

        return $response;
    }

    #[Route('/admin/buy/{id}', name: 'app_admin_buy_id')]
    public function ById($id, BuyRepository $buyRepository): Response
    {
        $buy = $buyRepository->find($id);

        return $this->render('admin/pages/buy/id.html.twig', [
            'buy' => $buy,
        ]);
    }

    #[Route('/admin/buy/status/{id}', name: 'app_admin_buy_status')]
    public function status($id, BuyRepository $buyRepository): Response
    {
        $buy = $buyRepository->find($id);

        if (!$buy) {
            throw $this->createNotFoundException('Pedido não encontrado');
        }

        $status = $buy->getStatus();

        if ($status == 'approved') {
            $buy->setStatus('pending');
        } else if ($status == 'pending') {
            $buy->setStatus('approved');
        }

        $buyRepository->save($buy, true);

        return $this->redirectToRoute('app_admin_buy_list');
    }
}

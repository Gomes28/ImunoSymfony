<?php

namespace App\Controller\user;

use App\Entity\Buy;
use App\Repository\BuyRepository;
use App\Service\MercadoPagoService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{

    #[Route('/update/reference/{reference}', name: 'payment_update_reference')]
    public function reference(string $reference, Request $request,
                              MercadoPagoService $mercadoPagoService,
                              BuyRepository $buyRepository,
                              EntityManagerInterface $entityManager): Response
    {
        $data = array_merge($request->query->all(), $request->request->all());

        $idReference = $data['data_id'];

        $payment = $mercadoPagoService->findById($idReference);

        dd($payment);

        if ($payment) {

            try {
                $status = $payment->status;
                /** @var Buy $buy */
                $buy = $buyRepository->findForReference($reference);

                $response = ['status' => $status, 'buy' => $buy?->getId(), 'referenceID' => $idReference];

            } catch (\Exception $e) {
                dd($e);
            }
        }
            return new Response(null, 500);
    }
}

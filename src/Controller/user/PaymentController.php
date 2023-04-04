<?php

namespace App\Controller\user;

use App\Entity\Buy;
use App\Entity\ReturnMp;
use App\Repository\BuyRepository;
use App\Repository\ReturnMpRepository;
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
        $json = array_merge($request->query->all(), $request->request->all());

        // acessar o campo "data_id" na matriz PHP
        $idReference = $json['data_id'];

        $payment = $mercadoPagoService->findById($idReference);

        if ($payment) {

            try {
                $status = $payment->status;

                /** @var Buy $buy */
                $buy = $buyRepository->findForReference($reference);

                $response = ['status' => $status, 'buy' => $buy?->getId(), 'referenceID' => $idReference];

                $ReturnMp = new ReturnMp();
                $ReturnMp->setIdMp($idReference);
                $ReturnMp->setDadosMp([$response]);

                // persistir o objeto ReturnMp no banco de dados
                $entityManager->persist($ReturnMp);
                $entityManager->flush();

                if ($buy) {
                    if ($status === "approved" && $buy->getStatus() != "approved") {

                    } elseif (in_array(trim(strtolower($status)),['rejected',"failure","cancelled","refunded"])) {
                    }
                    $buy->setStatus(trim($status));
                    $entityManager->flush();
                    return new Response(null, 200);
                }

            } catch (\Exception $e) {
                dd($e);
            }
        }
        return new Response('ok!', 200);
    }
}
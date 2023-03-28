<?php

namespace App\Controller\user;

use App\Repository\BuyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/status')]
class StatusController extends AbstractController
{
    private BuyRepository $buyRepository;

    public function __construct(BuyRepository $buyRepository)
    {
        $this->buyRepository = $buyRepository;
    }

    #[Route('/success/{reference}', name: 'status_success')]
    public function success(string $reference): Response
    {
        $buy = $this->getBuy($reference);
        return $this->returnRender($buy,'success');
    }

    #[Route('/pending/{reference}', name: 'status_pending')]
    public function pending(string $reference): Response
    {
        $buy = $this->getBuy($reference);
        return $this->returnRender($buy,'pending');
    }

    #[Route('/failure/{reference}', name: 'status_failure')]
    public function failure(string $reference): Response
    {
        $buy = $this->getBuy($reference);
        return $this->returnRender($buy,'failure');
    }

    private function returnRender($buy, $pagename = ''){
        return $this->render("front/pages/status/$pagename.html.twig", [
            'buy' => $buy,
        ]);
    }

    private function getBuy($reference){
        $buy = $this->buyRepository->findForReferenceMP($reference);
        if(!$buy) throw new NotFoundHttpException('Buy Not Found');
        return $buy;
    }


}
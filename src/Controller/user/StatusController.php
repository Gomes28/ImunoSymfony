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
        return $this->returnRender('success');
    }

    #[Route('/pending/{reference}', name: 'status_pending')]
    public function pending(string $reference): Response
    {
        $buy = $this->getBuy($reference);
        return $this->returnRender('pending');
    }

    #[Route('/failure/{reference}', name: 'status_failure')]
    public function failure(string $reference): Response
    {
        $buy = $this->getBuy($reference);
        return $this->returnRender('failure');
    }

    private function returnRender($pagename = ''){
        return $this->render("front/pages/status/$pagename.html.twig");
    }

    private function getBuy($reference){
        $buy = $this->buyRepository->findForReferenceMP($reference);
        if(!$buy) throw new NotFoundHttpException('Buy Not Found');
        return $buy;
    }


}
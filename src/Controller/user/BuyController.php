<?php

namespace App\Controller\user;

use App\Entity\Buy;
use App\Helper\StringResources;
use App\Repository\BuyRepository;
use App\Repository\BuyVacinRepository;
use App\Repository\ProductsRepository;
use App\Repository\UserRepository;
use App\Service\CartService;
use App\Service\MercadoPagoService;
use Doctrine\ORM\EntityManagerInterface;
use MercadoPago\Preference;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BuyController extends AbstractController
{
    #[Route('/buy/checkout/{BuyId}/{ProductId}', name: 'app_buy_checkout')]
    #[IsGranted('ROLE_USER')]
    public function index($BuyId, $ProductId, CartService $cart, SessionInterface $session,
                          ProductsRepository $productsRepository,
                          BuyVacinRepository $buyVacin,
                          EntityManagerInterface $entityManager,
                          MercadoPagoService $mercadoPagoService): Response
    {
        // Get the cart data from the session

        $BuyVacin = $buyVacin->find($BuyId);

        $cartItems = $session->get('cart', []);

        // If the cart is empty, redirect the user to the homepage
        if (count($cartItems) == 0) {
            return $this->redirectToRoute('app_page');
        }

        // Calculate the cart total
        $cartTotal = 0;
        foreach ($cartItems as $item) {
            $productPrice = $item->getProduct()->getPrice();
            $quantity = $item->getQuantity();
            $cartTotal += $productPrice * $quantity;
        }

        $productBd = $productsRepository->find($item->getProduct()->getId());

        $paymentName = $item->getProduct()->getName();

        $cartTotalPrice = $cartTotal;

        $mercadoPagoService = new MercadoPagoService();

        $buyVacin = $entityManager->getRepository($BuyVacin::class)->find($BuyId);

        $product = $productsRepository->find($ProductId);

        try {
            $idReference = StringResources::generateRandom();
            $item = $mercadoPagoService->createItem($paymentName, 1, $cartTotalPrice);
            $preference = $this->createPreferenceMP($item, $idReference);

                if ($preference->save()) {
                    $buy = new Buy();
                    $buy->setUser($this->getUser());
                    $buy->setTotalPayment($cartTotalPrice);
                    $buy->setBuyVacin($buyVacin);
                    $buy->setIdMl($idReference);
                    $buy->setProductId($product);
                    $entityManager->persist($buy);
                    $entityManager->flush();
                } else {
                    return $this->redirectToRoute('app_page');
                }

            return $this->render('front/page/buy/Cart.html.twig', [
                'cartItems' => $cartItems,
                'cartTotal' => $cartTotal,
                'BuyVacin' => $BuyVacin,
                'preference' => $preference->id,
            ]);

        } catch (\Exception $e) {
            $this->addFlash('danger', $e->getMessage());
            $this->addFlash('danger', 'Erro inesperado, comunique a um responsável');
        }

        return $this->redirectToRoute('app_page');
    }

    private function createPreferenceMP($item, $idReference): \MercadoPago\Preference
    {
        $mercadoPagoService = new MercadoPagoService();

        $preference = $mercadoPagoService->createPreference();

        $preference->items = [$item];

        $mercadoPagoService->setPayments($preference);

        $this->setNotificationUrl($preference, $idReference);

        $mercadoPagoService->setExternalReference($preference,$idReference);

        $mercadoPagoService->setBackUrls($preference,
            $this->generateUrl('status_success',['reference' => $idReference], UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl('status_pending',['reference' => $idReference], UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl('status_failure',['reference' => $idReference], UrlGeneratorInterface::ABSOLUTE_URL)
        );

        return $preference;
    }

    public function setNotificationUrl(Preference $preference, $idReference)
    {
        $url = $this->generateUrl('payment_update_reference', ['reference' => $idReference], UrlGeneratorInterface::ABSOLUTE_URL);
        $preference->notification_url = $url;
    }
}

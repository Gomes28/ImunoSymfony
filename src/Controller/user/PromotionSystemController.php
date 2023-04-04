<?php

namespace App\Controller\user;

use App\Entity\Buy;
use App\Entity\BuyVacin;
use App\Entity\PromotionSistem;
use App\Form\BuyTimeType;
use App\Helper\StringResources;
use App\Repository\BuyTimeRepository;
use App\Repository\BuyVacinRepository;
use App\Repository\ProductsRepository;
use App\Repository\PromotionSistemRepository;
use App\Repository\SchoolVacinRepository;
use App\Service\CartService;
use App\Service\MercadoPagoService;
use MercadoPago\Preference;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PromotionSystemController extends AbstractController
{
    #[Route('/promotion/{id}', name: 'app_promotion_system')]
    public function index($id, EntityManagerInterface $entityManager, PromotionSistemRepository $promotionSistemRepository, ProductsRepository $productsRepository): Response
    {
        $promocao = $promotionSistemRepository->find($id);

        $products = $productsRepository->findBy(['promotionSistem' => $id]);

        if ($promocao && $promocao->getStatus() == ['ATIVO']) {
            return $this->render('front/promotion/index.html.twig', [
                'promocao' => $promocao,
                'products' => $products
            ]);
        } else {
            // Promotion system is inactive, redirect to another page
            return $this->redirectToRoute('app_page');
        }
    }

    #[Route('/promotion/product/{id}/{product_id}', name: 'app_promotion_productId')]
    public function productId($id, $product_id, BuyTimeRepository $buyTimeRepository, EntityManagerInterface $entityManager, PromotionSistemRepository $promotionSistemRepository, ProductsRepository $productsRepository): Response
    {

        $promotion = $promotionSistemRepository->find($id);

        $products = $productsRepository->find($product_id);

        $date = $buyTimeRepository->findBy(['PromotionId' => $id]);

        if ($products && $products->getStatus() == ['ATIVO']) {
            return $this->render('front/promotion/ProductId.html.twig', [
                'product' => $products,
                'time' => $date,
                'promotion' => $promotion
            ]);
        } else {
            // Promotion system is inactive, redirect to another page
            return $this->redirectToRoute('app_page');
        }
    }

    #[Route('/promotio/buy/vacin', name: 'app_promotion_buy_vacin', methods: ['POST'])]
    public function buyVacin(Request $request, EntityManagerInterface $entityManager, SchoolVacinRepository $schoolVacinRepository, ProductsRepository $productsRepository): Response
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Quantity = $_POST['quantity'];
            $OthersVacinated = $_POST['OthersVacinated'];
            $id = $_POST['id_product'];
            $schoolId = $_POST['school'];
            $productId = $_POST['id_product'];
            $time = $_POST['time'];
            $date = $_POST['date'];
            $promotion = $_POST['promotion'];

            $buyVacin = new BuyVacin();

            $school = $schoolVacinRepository->find($schoolId);
            $product = $productsRepository->find($productId);

            $buyVacin->setUser($this->getUser());
            $buyVacin->setQuantity($Quantity);
            $buyVacin->setOthersVacinated($OthersVacinated);
            $buyVacin->setSchoolId($school);
            $buyVacin->setProduct($product);
            $entityManager->persist($buyVacin);
            $entityManager->flush();
            return $this->redirectToRoute('promotion_cart_add', ['promotion' => $promotion, 'productId' => $id, 'quantity' => $Quantity, 'BuyId' => $buyVacin->getId(), 'time' => $time, 'day' => $date]);
        } else {
            dd('errpr');
        }
    }

    #[Route('/promotion/cart/add/{promotion}/{productId}/{quantity}/{BuyId}/{time}/{day}', name: 'promotion_cart_add')]
    public function add($promotion, $productId, $quantity, $BuyId, $time, $day, CartService $cart, ProductsRepository $productRepository, SessionInterface $session)
    {
        $product = $productRepository->find($productId);
        $cart->add($product, $quantity);

        // Save the cart data in the session
        $session->set('cart', $cart->getItems());

        return $this->redirectToRoute('app_buy_promotion_checkout', ['promotion' => $promotion, 'BuyId' => $BuyId, 'ProductId' => $productId, 'time' => $time, 'day' => $day]);
    }

    #[Route('/cart/view', name: 'cart_view')]
    public function view(CartService $cart, SessionInterface $session)
    {
        // Get the cart data from the session
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

        return $this->render('front/page/Cart.html.twig', [
            'cartItems' => $cartItems,
            'cartTotal' => $cartTotal
        ]);
    }

    #[Route('/promotion/buy/checkout/{promotion}/{BuyId}/{ProductId}/{time}/{day}', name: 'app_buy_promotion_checkout')]
    #[IsGranted('ROLE_USER')]
    public function buy($promotion,$time, $day, $BuyId, $ProductId, CartService $cart, SessionInterface $session,
                          ProductsRepository $productsRepository,
                          BuyVacinRepository $buyVacin,
                          EntityManagerInterface $entityManager,
                          MercadoPagoService $mercadoPagoService,
                          PromotionSistemRepository $promotionSistemRepository,
                          BuyTimeRepository $buyTimeRepository): Response
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

        $getPromotion = $promotionSistemRepository->find($promotion);

        try {
            $idReference = StringResources::generateRandom();
            $item = $mercadoPagoService->createItem($paymentName, 1, $cartTotalPrice);
            $preference = $this->createPreferenceMP($item, $idReference);

            $date = $buyTimeRepository->find($day);

            if ($preference->save()) {
                $buy = new Buy();
                $buy->setUser($this->getUser());
                $buy->setTotalPayment($cartTotalPrice);
                $buy->setBuyVacin($buyVacin);
                $buy->setIdMl($idReference);
                $buy->setProductId($product);
                $buy->setTime($time);
                $buy->setDate($date->getDay());
                $buy->setPromotionSistem($getPromotion);
                $entityManager->persist($buy);
                $entityManager->flush();
            } else {
                return $this->redirectToRoute('app_page');
            }

            return $this->render('front/promotion/Cart.html.twig', [
                'cartItems' => $cartItems,
                'date' => $date,
                'time' => $time,
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

    // MERCADO PAGO \\
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

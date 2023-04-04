<?php

namespace App\Controller\user;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

#[AsController]
class CartController extends AbstractController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    #[Route('/cart/add/{productId}/{quantity}/{BuyId}/', name: 'cart_add')]
    public function add($productId, $quantity, $BuyId, CartService $cart, ProductsRepository $productRepository, SessionInterface $session)
    {
        $product = $productRepository->find($productId);
        $cart->add($product, $quantity);

        // Save the cart data in the session
        $session->set('cart', $cart->getItems());

        return $this->redirectToRoute('app_buy_checkout', ['BuyId' => $BuyId, 'ProductId' => $productId]);
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

    #[Route('/cart/remove/{productId}', name: 'cart_remove', methods: ['DELETE'])]
    public function remove($productId, CartService $cart, SessionInterface $session)
    {
        $session->clear('cart');
        $cart->remove($productId);
        return $this->redirectToRoute('cart_view');
    }
}

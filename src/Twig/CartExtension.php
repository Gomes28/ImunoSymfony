<?php

namespace App\Twig;

use App\Service\CartService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CartExtension extends AbstractExtension
{
    private $cart;

    public function __construct(CartService $cart)
    {
        $this->cart = $cart;
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('cart_items', [$this, 'getCartItems']),
            new TwigFunction('cart_total', [$this, 'getCartTotal']),
        ];
    }

    public function getCartItems()
    {
        return $this->cart->getItems();
    }

    public function getCartTotal()
    {
        return $this->cart->getTotal();
    }
}

<?php

namespace App\Twig;

use App\Cart;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CartExtension extends AbstractExtension
{
    private $cart;

    public function __construct(Cart $cart)
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

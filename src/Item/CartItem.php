<?php

namespace App\Item;

use App\Entity\Products;

class CartItem
{
    private $products;
    private $quantity;
    private $productId;

    public function __construct(Products $products, int $quantity = 0)
    {
        $this->products = $products;
        $this->quantity = $quantity;
        $this->productId = $products->getId();
    }

    public function getProduct(): Products
    {
        return $this->products;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getProductId(): int
    {
        return $this->productId;
    }
}

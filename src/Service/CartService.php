<?php

namespace App\Service;

class Cart
{
    private $items = [];

    public function add(Product $product, int $quantity = 1)
    {
        $productId = $product->getId();

        if (isset($this->items[$productId])) {
            $this->items[$productId]->setQuantity($this->items[$productId]->getQuantity() + $quantity);
        } else {
            $this->items[$productId] = new CartItem($product, $quantity);
        }
    }

    public function addItem($productId, $quantity)
    {
        if (isset($this->items[$productId])) {
            $this->items[$productId] += $quantity;
        } else {
            $this->items[$productId] = $quantity;
        }
    }

    public function removeItem($productId)
    {
        unset($this->items[$productId]);
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotal()
    {
        // Lógica para calcular o total do carrinho
    }
}

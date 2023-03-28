<?php

namespace App\Service;

use App\Entity\Products;
use App\Item\CartItem;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService
{
    private $session;
    private $entityManager;
    private $items = [];
    private $productRepository;

    public function __construct(EntityManagerInterface $entityManager, ProductsRepository $productRepository, )
    {
        $this->entityManager = $entityManager;
        $this->productRepository = $productRepository;
    }
    public function add(Products $product, int $quantity)
    {
        $productId = $product->getId();

        if (isset($this->items[$productId])) {
            $this->items[$productId]->setQuantity($this->items[$productId]->getQuantity() + $quantity);
        } else {
            $this->items[$productId] = new CartItem($product, $quantity);
        }

        return $this->items;
    }


    public function addItem($productId, $quantity)
    {
        if (isset($this->items[$productId])) {
            $this->items[$productId]->setQuantity($this->items[$productId]->getQuantity() + $quantity);
        } else {
            $product = $this->productRepository->find($productId);
            $this->items[$productId] = new CartItem($product, $quantity);
        }
    }

    public function remove($productId)
    {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
        }
        // Se não houver mais nenhum item no carrinho, limpa o carrinho
        if (count($this->items) === 0) {
            $this->items = [];
        }
        return $this->items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getProduct()->getPrice() * $item->getQuantity();
        }
        return $total;
    }
}

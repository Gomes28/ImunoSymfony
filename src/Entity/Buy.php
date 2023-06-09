<?php

namespace App\Entity;

use App\Repository\BuyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BuyRepository::class)]
class Buy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?BuyVacin $BuyVacin = null;

    #[ORM\ManyToOne]
    private ?User $user = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: '0')]
    private ?string $total_payment = null;

    #[ORM\Column(length: 100)]
    private ?string $id_ml = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne(inversedBy: 'Buy')]
    private ?PromotionSistem $promotionSistem = null;

    #[ORM\ManyToOne]
    private ?Products $Product_id = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Date = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $Time = null;

    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable('now');
        $this->status = 'pending';
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBuyVacin(): ?BuyVacin
    {
        return $this->BuyVacin;
    }

    public function setBuyVacin(BuyVacin $BuyVacin): self
    {
        $this->BuyVacin = $BuyVacin;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getTotalPayment(): ?string
    {
        return $this->total_payment;
    }

    public function setTotalPayment(string $total_payment): self
    {
        $this->total_payment = $total_payment;

        return $this;
    }

    public function getIdMl(): ?string
    {
        return $this->id_ml;
    }

    public function setIdMl(string $id_ml): self
    {
        $this->id_ml = $id_ml;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPromotionSistem(): ?PromotionSistem
    {
        return $this->promotionSistem;
    }

    public function setPromotionSistem(?PromotionSistem $promotionSistem): self
    {
        $this->promotionSistem = $promotionSistem;

        return $this;
    }

    public function getProductId(): ?Products
    {
        return $this->Product_id;
    }

    public function setProductId(Products $Product_id): self
    {
        $this->Product_id = $Product_id;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(?string $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->Time;
    }

    public function setTime(?string $Time): self
    {
        $this->Time = $Time;

        return $this;
    }
}

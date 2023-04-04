<?php

namespace App\Entity;

use App\Repository\BuyTimeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BuyTimeRepository::class)]
class BuyTime
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 20)]
    private ?string $Day = null;

    #[ORM\ManyToOne(inversedBy: 'buyTimes')]
    private ?PromotionSistem $PromotionId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?string
    {
        return $this->Day;
    }

    public function setDay(string $Day): self
    {
        $this->Day = $Day;

        return $this;
    }

    public function getPromotionId(): ?PromotionSistem
    {
        return $this->PromotionId;
    }

    public function setPromotionId(?PromotionSistem $PromotionId): self
    {
        $this->PromotionId = $PromotionId;

        return $this;
    }
}

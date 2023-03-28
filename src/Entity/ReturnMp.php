<?php

namespace App\Entity;

use App\Repository\ReturnMpRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReturnMpRepository::class)]
class ReturnMp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10000, nullable: true)]
    private ?string $dadosMp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDadosMp(): ?string
    {
        return $this->dadosMp;
    }

    public function setDadosMp(?string $dadosMp): self
    {
        $this->dadosMp = $dadosMp;

        return $this;
    }
}

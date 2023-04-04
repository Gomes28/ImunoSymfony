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
    private ?array $dadosMp = null;

    #[ORM\Column(length: 255)]
    private ?string $id_mp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDadosMp(): ?string
    {
        return $this->dadosMp;
    }

    public function setDadosMp(?array $dadosMp): self
    {
        $this->dadosMp = $dadosMp;

        return $this;
    }

    public function getIdMp(): ?string
    {
        return $this->id_mp;
    }

    public function setIdMp(string $id_mp): self
    {
        $this->id_mp = $id_mp;

        return $this;
    }
}

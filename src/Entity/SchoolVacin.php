<?php

namespace App\Entity;

use App\Repository\SchoolVacinRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SchoolVacinRepository::class)]
class SchoolVacin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column]
    private array $Status = [];
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getStatus(): array
    {
        return $this->Status;
    }

    public function setStatus(array $Status): self
    {
        $this->Status = $Status;

        return $this;
    }
}

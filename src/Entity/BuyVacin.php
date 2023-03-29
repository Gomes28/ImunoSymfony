<?php

namespace App\Entity;

use App\Repository\BuyVacinRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BuyVacinRepository::class)]
class BuyVacin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $User = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: '2')]
    private ?string $Quantity = null;

    #[ORM\Column(length: 255)]
    private ?string $OthersVacinated = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?SchoolVacin $schoolId = null;

    public function __construct()
    {
        $this->SchoolId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->Quantity;
    }

    public function setQuantity(string $Quantity): self
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    public function getOthersVacinated(): ?string
    {
        return $this->OthersVacinated;
    }

    public function setOthersVacinated(string $OthersVacinated): self
    {
        $this->OthersVacinated = $OthersVacinated;

        return $this;
    }

    /**
     * @return Collection<int, SchoolVacin>
     */
    public function getSchoolId(): Collection
    {
        return $this->SchoolId;
    }

    public function addSchoolId(SchoolVacin $schoolId): self
    {
        if (!$this->SchoolId->contains($schoolId)) {
            $this->SchoolId->add($schoolId);
            $schoolId->setSchoolId($this);
        }

        return $this;
    }

    public function removeSchoolId(SchoolVacin $schoolId): self
    {
        if ($this->SchoolId->removeElement($schoolId)) {
            // set the owning side to null (unless already changed)
            if ($schoolId->getSchoolId() === $this) {
                $schoolId->setSchoolId(null);
            }
        }

        return $this;
    }

    public function setSchoolId(?SchoolVacin $schoolId): self
    {
        $this->schoolId = $schoolId;

        return $this;
    }
}

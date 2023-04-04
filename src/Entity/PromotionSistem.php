<?php

namespace App\Entity;

use App\Repository\PromotionSistemRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionSistemRepository::class)]
class PromotionSistem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 400)]
    private ?string $description = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?SchoolVacin $School = null;

    #[ORM\OneToMany(mappedBy: 'promotionSistem', targetEntity: Products::class)]
    private Collection $Product;

    #[ORM\OneToMany(mappedBy: 'promotionSistem', targetEntity: BuyVacin::class)]
    private Collection $BuyVacin;

    #[ORM\OneToMany(mappedBy: 'promotionSistem', targetEntity: Buy::class)]
    private Collection $Buy;

    #[ORM\OneToMany(mappedBy: 'promotionSistem', targetEntity: Category::class)]
    private Collection $Category;

    #[ORM\Column]
    private array $Status = [];

    #[ORM\Column(length: 255)]
    private ?string $imageFilename = null;

    #[ORM\OneToMany(mappedBy: 'PromotionId', targetEntity: BuyTime::class)]
    private Collection $buyTimes;

    public function __construct()
    {
        $this->Product = new ArrayCollection();
        $this->BuyVacin = new ArrayCollection();
        $this->Buy = new ArrayCollection();
        $this->Category = new ArrayCollection();
        $this->buyTimes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSchool(): ?SchoolVacin
    {
        return $this->School;
    }

    public function setSchool(?SchoolVacin $School): self
    {
        $this->School = $School;

        return $this;
    }

    /**
     * @return Collection<int, Products>
     */
    public function getProduct(): Collection
    {
        return $this->Product;
    }

    public function addProduct(Products $product): self
    {
        if (!$this->Product->contains($product)) {
            $this->Product->add($product);
            $product->setPromotionSistem($this);
        }

        return $this;
    }

    public function removeProduct(Products $product): self
    {
        if ($this->Product->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getPromotionSistem() === $this) {
                $product->setPromotionSistem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BuyVacin>
     */
    public function getBuyVacin(): Collection
    {
        return $this->BuyVacin;
    }

    public function addBuyVacin(BuyVacin $buyVacin): self
    {
        if (!$this->BuyVacin->contains($buyVacin)) {
            $this->BuyVacin->add($buyVacin);
            $buyVacin->setPromotionSistem($this);
        }

        return $this;
    }

    public function removeBuyVacin(BuyVacin $buyVacin): self
    {
        if ($this->BuyVacin->removeElement($buyVacin)) {
            // set the owning side to null (unless already changed)
            if ($buyVacin->getPromotionSistem() === $this) {
                $buyVacin->setPromotionSistem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Buy>
     */
    public function getBuy(): Collection
    {
        return $this->Buy;
    }

    public function addBuy(Buy $buy): self
    {
        if (!$this->Buy->contains($buy)) {
            $this->Buy->add($buy);
            $buy->setPromotionSistem($this);
        }

        return $this;
    }

    public function removeBuy(Buy $buy): self
    {
        if ($this->Buy->removeElement($buy)) {
            // set the owning side to null (unless already changed)
            if ($buy->getPromotionSistem() === $this) {
                $buy->setPromotionSistem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategory(): Collection
    {
        return $this->Category;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->Category->contains($category)) {
            $this->Category->add($category);
            $category->setPromotionSistem($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->Category->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getPromotionSistem() === $this) {
                $category->setPromotionSistem(null);
            }
        }

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

    public function getImageFilename(): ?string
    {
        return $this->imageFilename;
    }

    public function setImageFilename(string $imageFilename): self
    {
        $this->imageFilename = $imageFilename;

        return $this;
    }

    /**
     * @return Collection<int, BuyTime>
     */
    public function getBuyTimes(): Collection
    {
        return $this->buyTimes;
    }

    public function addBuyTime(BuyTime $buyTime): self
    {
        if (!$this->buyTimes->contains($buyTime)) {
            $this->buyTimes->add($buyTime);
            $buyTime->setPromotionId($this);
        }

        return $this;
    }

    public function removeBuyTime(BuyTime $buyTime): self
    {
        if ($this->buyTimes->removeElement($buyTime)) {
            // set the owning side to null (unless already changed)
            if ($buyTime->getPromotionId() === $this) {
                $buyTime->setPromotionId(null);
            }
        }

        return $this;
    }
}

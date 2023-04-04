<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Products::class)]
    private Collection $product_id;

    #[ORM\Column(length: 255)]
    private ?string $imageFilename = null;

    #[ORM\ManyToOne(inversedBy: 'time')]
    private ?PromotionSistem $promotionSistem = null;

    public function __construct()
    {
        $this->product_id = new ArrayCollection();
    }

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Products>
     */
    public function getProductId(): Collection
    {
        return $this->product_id;
    }

    public function addProductId(Products $productId): self
    {
        if (!$this->product_id->contains($productId)) {
            $this->product_id->add($productId);
            $productId->setCategory($this);
        }

        return $this;
    }

    public function removeProductId(Products $productId): self
    {
        if ($this->product_id->removeElement($productId)) {
            // set the owning side to null (unless already changed)
            if ($productId->getCategory() === $this) {
                $productId->setCategory(null);
            }
        }

        return $this;
    }

    public function setImageFilename(?string $imageFilename): self
    {
        $this->imageFilename = $imageFilename;

        return $this;
    }

    public function getImageFile(): ?UploadedFile
    {
        return $this->imageFile;
    }

    public function setImageFile(?UploadedFile $imageFile): self
    {
        $this->imageFile = $imageFile;

        if ($this->imageFilename) {
            // force the preUpdate and prePersist events to re-upload the image
            $this->imageFilename = null;
        }

        return $this;
    }

    public function setImageFileFromString(string $imageString): self
    {
        $this->imageFile = new File($imageString);
        return $this;
    }

    public function getImageFilePath(): ?string
    {
        return $this->imageFilename ? 'uploads/images/' . $this->imageFilename : null;
    }

    public function getImageFileUrl(): ?string
    {
        return $this->imageFilename ? '/uploads/images/' . $this->imageFilename : null;
    }

    public function getWebImagePath(): ?string
    {
        return $this->getImageFilePath() ? '/uploads/images/' . $this->imageFilename : null;
    }

    public function getImageFilename(): ?string
    {
        return $this->imageFilename;
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
}

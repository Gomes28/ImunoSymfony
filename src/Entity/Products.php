<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsRepository::class)]
class Products
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: '0')]
    private ?string $price = null;

    #[ORM\ManyToOne(inversedBy: 'product_id')]
    private ?Category $category = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageFilename = null;

    public function getImageFilename(): ?string
    {
        return $this->imageFilename;
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
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}

<?php


namespace App\Model;


use App\Interfaces\Serializable;

class Gallery implements Serializable
{
    private array $images = [];
    private ?array $order_images = [];

    public function addImage(Image $image): self
    {
        $this->images[] = $image;
        return $this;
    }

    public function removeImage(?Image $image): self
    {
        if($image) {
            foreach ($this->images as $key => $val) {
                if ($val == $image) {
                    unset($this->images[$key]);
                    foreach (array_keys($this->order_images, $val->getId(), true) as $key) unset($this->order_images[$key]);
                }
            }
        }
        return $this;
    }

    public function findImage(int $id): ?Image
    {
        foreach ($this->images as $j => $image) {
            if (intval($id) === intval($image->getId())) return $image;
        }
        return null;
    }

    public function getImages(): array
    {
        $images = [];
        foreach ($this->order_images as $i => $value){
            foreach ($this->images as $j => $image){
                if(intval($value) === intval($image->getId())) {
                    array_push($images,$image);
                    break;
                }
            }
        }
        return $images;
    }

    public function getOrderImage(): ?array
    {
        return $this->order_images;
    }

    public function setOrderImage(?array $order_image): self
    {
        $this->order_images = $order_image;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'images' => $this->getImages(),
            'order' =>$this->getOrderImage()
        ];
    }
}
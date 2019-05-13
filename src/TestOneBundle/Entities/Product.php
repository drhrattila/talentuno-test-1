<?php

namespace App\TestOneBundle\Entities;

use App\TestOneBundle\BaseEntity;

class Product extends BaseEntity
{

    protected $productId;
    protected $price;
    protected $description;
    


    /**
     * getProductId
     *
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    
    /**
     * Set the value of productId
     *
     * @return  self
     */ 
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }


    /**
     * getPrice
     *
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }


    /**
     * setPrice
     *
     * @param  mixed $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }


    /**
     * getDescription
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }


    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description): self
    {
        $this->description = stripslashes($description);

        return $this;
    }


    /**
     * fillWithTestData
     *
     * @param  mixed $productId
     *
     * @return self
     */
    public function fillWithTestData(int $productId = 1): self
    {
        $this->setProductId($productId);
        $this->setPrice(20.25);
        $this->setDescription('Product (id: '.$this->productId.') description');

        return $this;
    }
}
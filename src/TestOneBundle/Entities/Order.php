<?php

namespace App\TestOneBundle\Entities;

use App\TestOneBundle\BaseEntity;

class Order extends BaseEntity
{

    protected $orderId;
    protected $email;
    protected $items;
    
 
    /**
     * getOrderId
     *
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }


    /**
     * setOrderId
     *
     * @param  mixed $orderId
     *
     * @return self
     */
    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }


    /**
     * getEmail
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }


    /**
     * setEmail
     *
     * @param  mixed $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        if (false === filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new \Exception('Wrong email address!');
        }

        $this->email = $email;

        return $this;
    }

 
    /**
     * getItems
     *
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }


    /**
     * setItems
     *
     * @param  mixed $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }


    /**
     * fillWithTestData
     *
     * @return self
     */
    public function fillWithTestData(): self
    {
        $this->setOrderId(3222);
        $this->setEmail('order@example.com');
        $this->setItems([
            'productId' => 32,
            'quantity' => 2,
        ]);

        return $this;
    }
}
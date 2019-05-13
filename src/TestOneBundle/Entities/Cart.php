<?php

namespace App\TestOneBundle\Entities;

use App\TestOneBundle\BaseEntity;

class Cart extends BaseEntity
{
    protected $email;
    protected $items;

    
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
     * getEmail
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }


    /**
     * setItems
     *
     * @param  mixed $value
     *
     * @return self
     */
    public function setItems(array $value): self
    {
        $this->items = $value;

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
     * fillWithTestData
     *
     * @return self
     */
    public function fillWithTestData(): self
    {
        $this->setEmail('cart@example.com');
        $this->setItems([
            'productId' => 151,
            'quantity' => 2,
        ]);

        return $this;
    }
}
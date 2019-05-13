<?php

namespace App\TestOneBundle\Entities;

use App\TestOneBundle\BaseEntity;

class Invoice extends BaseEntity
{

    protected $email;
    protected $orderId;
    protected $description;
    

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
     * getDescription
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }


    /**
     * setDescription
     *
     * @param  mixed $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = stripslashes($description);

        return $this;
    }


    /**
     * fillWithTestData
     *
     * @return self
     */
    public function fillWithTestData(): self
    {
        $this->setEmail('order@example.com');
        $this->setOrderId(2127);
        $this->setDescription('Order (id: '.$this->orderId.') description');

        return $this;
    }
}
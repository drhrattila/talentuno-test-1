<?php

namespace App\TestOneBundle\Entities;

use App\TestOneBundle\BaseEntity;

class User extends BaseEntity
{

    protected $email;
    protected $firstName;
    protected $lastName;
    

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
     * getFirstName
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }


    /**
     * setFirstName
     *
     * @param  mixed $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }


    /**
     * getLastName
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }


    /**
     * setLastName
     *
     * @param  mixed $lastName
     *
     * @return self
     */
    public function setLastName($lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }


    /**
     * fillWithTestData
     *
     * @return self
     */
    public function fillWithTestData(): self
    {
        $this->setEmail('user@example.com');
        $this->setFirstName('John');
        $this->setLastName('Doe');

        return $this;
    }
}
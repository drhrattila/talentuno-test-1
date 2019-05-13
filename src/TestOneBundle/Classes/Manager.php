<?php

namespace App\TestOneBundle\Classes;

use App\TestOneBundle\Interfaces\ManagerInterface;
use App\TestOneBundle\BaseEntity;

class Manager implements ManagerInterface
{
    private $entities = [];


    /**
     * addEntity
     *
     * @param  mixed $entity
     * @param  mixed $url
     *
     * @return void
     */
    public function addEntity(BaseEntity $entity, string $url): void
    {
        $this->entities[] = [
            'data' => $entity->toArray(),
            'url' => $url
        ];
    }

    
    /**
     * removeEntity
     *
     * @param  mixed $key
     *
     * @return void
     */
    public function removeEntity(string $key): void
    {
        if(isset($this->entities[$key]))
        {
            $this->entities[$key] = null;       
            unset($this->entities[$key]);
        }
    }


    /**
     * findAll
     *
     * @return array
     */
    public function findAll(): array
    {
        return (array)$this->entities;
    }
}

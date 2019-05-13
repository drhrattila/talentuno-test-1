<?php

namespace App\TestOneBundle\Traits;

trait EntityTrait {

    
    /**
     * __get
     *
     * @param  mixed $propertyName
     *
     * @return void
     */
    public function __get(string $propertyName)
    {
        return isset($this->{$propertyName}) ? $this->{$propertyName} : null;
    }

    
    /**
     * __set
     *
     * @param  mixed $propertyName
     * @param  mixed $value
     *
     * @return void
     */
    public function __set(string $propertyName, $value): void
    {
        $this->{$propertyName} = $value;
    }
}
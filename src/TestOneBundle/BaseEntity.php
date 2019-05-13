<?php

namespace App\TestOneBundle;

use App\TestOneBundle\Traits\EntityTrait;

abstract class BaseEntity
{
    use EntityTrait;

    
    /**
     * toArray
     *
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
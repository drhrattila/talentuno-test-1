<?php

namespace App\TestOneBundle\Classes;

use App\TestOneBundle\Interfaces\ConnectorInterface;

class Connector implements ConnectorInterface
{
    /**
     * sendData
     *
     * @param  mixed $url
     * @param  mixed $data
     *
     * @return void
     */
    public function sendData(string $url, array $data): void
    {
        echo json_encode([$url, $data]);
    }
}
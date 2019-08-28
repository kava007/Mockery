<?php

namespace App;

use External\Service;

class Temperature
{

    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function current()
    {
        return $this->service->readTemp();        
    }

}
<?php

namespace App;

use App\CourierService\CourierInterface;

class Client
{
    /**
     * @var CourierInterface
     */
    private $courier;

    public function __construct(CourierInterface $courier)
    {
        $this->courier = $courier;
    }

    public function createShipment()
    {
        $this->courier->createShipment();
    }

    public function trackShipment()
    {
        return $this->courier->trackShipment();
    }
}

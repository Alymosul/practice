<?php

namespace App\CourierService;

use App\CourierService\CourierOne\CourierOneInterface;

class CourierOneAdapter implements CourierInterface
{
    /**
     * @var CourierOneInterface
     */
    private $courierOne;

    public function __construct(CourierOneInterface $courierOne)
    {
        $this->courierOne = $courierOne;
    }

    /**
     * Creates the shipment.
     *
     * @return mixed
     */
    public function createShipment()
    {
        return $this->courierOne->createShipmentAndGetWayBill();
    }

    /**
     * Tracks the shipment.
     *
     * @return mixed
     */
    public function trackShipment()
    {
        return $this->courierOne->getShipmentTrackingDetails();
    }
}

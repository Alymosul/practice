<?php

namespace App\CourierService;

use App\CourierService\CourierThree\CourierThreeInterface;

class CourierThreeAdapter implements CourierInterface
{
    /**
     * @var CourierThreeInterface
     */
    private $courierThree;

    public function __construct(CourierThreeInterface $courierThree)
    {
        $this->courierThree = $courierThree;
    }

    /**
     * Creates the shipment.
     *
     * @return mixed
     */
    public function createShipment()
    {
        $this->courierThree->createShipmentAndGetWayBill();
    }

    /**
     * Tracks the shipment.
     *
     * @return mixed
     */
    public function trackShipment()
    {
        $this->courierThree->registerNumberToGetTrackingDetails();
        $this->courierThree->getTrackingDetails();
    }
}
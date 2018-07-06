<?php

namespace App\CourierService;

use App\CourierService\CourierTwo\CourierTwoInterface;

class CourierTwoAdapter implements CourierInterface
{

    /**
     * @var CourierTwoInterface
     */
    private $courierTwo;

    public function __construct(CourierTwoInterface $courierTwo)
    {
        $this->courierTwo = $courierTwo;
    }

    /**
     * Creates the shipment.
     *
     * @return mixed
     */
    public function createShipment()
    {
        $this->courierTwo->createShipmentInfo();
        $this->courierTwo->createShipmentInstruction();
        $this->courierTwo->getShipmentWayBill();
    }

    /**
     * Tracks the shipment.
     *
     * @return mixed
     */
    public function trackShipment()
    {
        $this->courierTwo->getShipmentTrackingDetails();
    }
}
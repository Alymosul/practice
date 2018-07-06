<?php

namespace App\CourierService\CourierOne;

interface CourierOneInterface
{
    public function createShipmentAndGetWayBill();

    public function getShipmentTrackingDetails();
}

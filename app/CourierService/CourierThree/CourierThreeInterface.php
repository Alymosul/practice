<?php

namespace App\CourierService\CourierThree;

interface CourierThreeInterface
{
    public function createShipmentAndGetWayBill();

    public function registerNumberToGetTrackingDetails();

    public function getTrackingDetails();
}

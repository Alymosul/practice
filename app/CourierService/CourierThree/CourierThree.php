<?php

namespace App\CourierService\CourierThree;

class CourierThree implements CourierThreeInterface
{
    public function createShipmentAndGetWayBill()
    {
        echo "created \r\n";
    }

    public function registerNumberToGetTrackingDetails()
    {
        echo "here's the number \r\n";
    }

    public function getTrackingDetails()
    {
        echo "here is the info \r\n";
    }
}

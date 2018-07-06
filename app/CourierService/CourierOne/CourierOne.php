<?php

namespace App\CourierService\CourierOne;

class CourierOne implements CourierOneInterface
{
    public function createShipmentAndGetWayBill()
    {
        echo "created and here's the number \r\n";
    }

    public function getShipmentTrackingDetails()
    {
        echo "here is the info \r\n";
    }
}

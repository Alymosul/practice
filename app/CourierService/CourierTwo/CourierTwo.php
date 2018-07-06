<?php

namespace App\CourierService\CourierTwo;

class CourierTwo implements CourierTwoInterface
{
    public function createShipmentInfo()
    {
        echo "created info \r\n";
    }

    public function createShipmentInstruction()
    {
        echo "created instruction \r\n";
    }

    public function getShipmentWayBill()
    {
        echo "here's the number \r\n";
    }

    public function getShipmentTrackingDetails()
    {
        echo "here is the info \r\n";
    }
}

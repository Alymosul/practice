<?php

namespace App\CourierService\CourierTwo;

interface CourierTwoInterface
{
    public function createShipmentInfo();

    public function createShipmentInstruction();

    public function getShipmentWayBill();

    public function getShipmentTrackingDetails();
}

<?php

namespace App\CourierService;

interface CourierInterface
{
    /**
     * Creates the shipment.
     *
     * @return mixed
     */
    public function createShipment();

    /**
     * Tracks the shipment.
     *
     * @return mixed
     */
    public function trackShipment();
}

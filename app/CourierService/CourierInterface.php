<?php

namespace App\CourierService;

use App\Product;

interface CourierInterface
{
    /**
     * Gets the shipment fees for the current courier.
     *
     * @return float
     */
    public function getShipmentFees(): float;

    /**
     * Delivers the product to the customer.
     *
     * @param Product $product
     *
     * @return mixed
     */
    public function deliver(Product $product);
}

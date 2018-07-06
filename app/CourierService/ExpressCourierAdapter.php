<?php

namespace App\CourierService;

use App\CourierService\Express\ExpressCourierInterface;
use App\Product;

class ExpressCourierAdapter implements CourierInterface
{
    /**
     * @var ExpressCourierInterface
     */
    private $expressCourier;

    public function __construct(ExpressCourierInterface $expressCourier)
    {
        $this->expressCourier = $expressCourier;
    }

    /**
     * Gets the shipment fees for the current courier.
     *
     * @return float
     */
    public function getShipmentFees(): float
    {
        return $this->expressCourier->dieselCost();
    }

    /**
     * Delivers the product to the customer.
     *
     * @param Product $product
     *
     * @return void
     */
    public function deliver(Product $product)
    {
        $this->expressCourier->fillDiesel();
        $this->expressCourier->engineOn();
        $this->expressCourier->go();
    }
}

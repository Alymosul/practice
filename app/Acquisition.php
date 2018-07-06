<?php

namespace App;

use App\CourierService\CourierInterface;

class Acquisition
{
    /**
     * The product under acquisition.
     *
     * @var Product
     */
    protected $product;

    /**
     * The delivery pals.
     *
     * @var CourierInterface
     */
    protected $courier;

    /**
     * Acquisition constructor.
     *
     * @param CourierInterface $courier
     */
    public function __construct(CourierInterface  $courier)
    {
        $this->courier = $courier;
    }

    /**
     * Handles the process of acquisition of a certain product.
     *
     * @param Product $product
     */
    public function checkout(Product $product)
    {
        $this->product = $product;
        $this->buy();
        $this->sendToCustomer();
    }

    /**
     * Buys all the products in the current purchase.
     *
     * @return void
     */
    protected function buy()
    {
        $totalCost = $this->product->getPrice() + $this->courier->getShipmentFees();
        echo "Hooray! {$this->product->name} is now yours for {$totalCost} EGP. \r\n";
    }

    /**
     * Sends the product to the customer through the delivery pals.
     *
     * @return void
     */
    protected function sendToCustomer()
    {
        $this->courier->deliver($this->product);

        echo "{$this->product->name} is on it way!";
    }
}

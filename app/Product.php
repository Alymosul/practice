<?php

namespace App;

class Product
{
    /**
     * Product name.
     *
     * @var string
     */
    public $name;

    /**
     * Product price without taxes.
     *
     * @var float
     */
    private $price;

    /**
     * Current tax rate applied on every product.
     *
     * @var float
     */
    private $taxRate = 0.14;

    /**
     * Product constructor.
     *
     * @param string $name
     * @param float $price
     */
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Gets the final price of the product after applying taxes on it.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price + ($this->price * $this->taxRate);
    }
}

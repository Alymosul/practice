<?php

namespace App\CourierService\Express;

interface ExpressCourierInterface
{
    /**
     * The cost of fuel.
     *
     * @return float
     */
    public function dieselCost(): float;

    /**
     * Puts some fuel.
     *
     * @return mixed
     */
    public function fillDiesel();

    /**
     * Starts engine.
     *
     * @return mixed
     */
    public function engineOn();

    /**
     * Begins delivery journey.
     *
     * @return mixed
     */
    public function go();
}

<?php

namespace App\CourierService\Express;

class ExpressQ implements ExpressCourierInterface
{
    /**
     * The cost of fuel.
     *
     * @return float
     */
    public function dieselCost(): float
    {
        return 10.00;
    }

    /**
     * Puts some fuel.
     *
     * @return mixed
     */
    public function fillDiesel()
    {
        return 'The tank is now full.';
    }

    /**
     * Starts engine.
     *
     * @return mixed
     */
    public function engineOn()
    {
        return 'Started';
    }

    /**
     * Begins delivery journey.
     *
     * @return mixed
     */
    public function go()
    {
        return 'Delivering things';
    }
}

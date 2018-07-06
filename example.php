<?php

require __DIR__ . '/vendor/autoload.php';

$item = new \App\Product('Book', 20.00);

$ac = new \App\Acquisition(
    new \App\CourierService\ExpressCourierAdapter(
        new \App\CourierService\Express\ExpressQ
    )
);

$ac->checkout($item);
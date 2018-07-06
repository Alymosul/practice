<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \App\Client(new \App\CourierService\CourierOneAdapter(new \App\CourierService\CourierOne\CourierOne));

$client->createShipment();

$client->trackShipment();

echo "\r\n";

$client2 = new \App\Client(new \App\CourierService\CourierTwoAdapter(new \App\CourierService\CourierTwo\CourierTwo));

$client2->createShipment();

$client2->trackShipment();

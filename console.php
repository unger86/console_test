<?php
include './init/autoloader.php';
use classes\Bus;

$bus = new Bus;
$bus->setNumber_passengers(32);
$bus->setBaggage_weight(300);
$bus->setVitrati_paliva_100_km(20);
$bus->setMaximum_travel_distance(200);
$bus->setFactor(2);

$bus->setDistance(100);
$bus->setKilometer_rate(5);
$bus->setWater_category_coefficient(2);

echo $bus->calculate();

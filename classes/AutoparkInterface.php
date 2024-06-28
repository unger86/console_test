<?php
namespace classes;

Interface AutoparkInterface
{
    public function setNumber_passengers(int $value);
    public function setBaggage_weight(int $value);
    public function setVitrati_paliva_100_km(int $value);
    public function setMaximum_travel_distance(int $value);
    public function setFactor(int $value);

    public function setDistance(int $value);
    public function setKilometer_rate(int $value);
    public function setWater_category_coefficient(int $value);
}
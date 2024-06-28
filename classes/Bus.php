<?php
namespace classes;

use classes\AutoparkAbstract;
use classes\AutoparkInterface;

Class Bus extends AutoparkAbstract implements AutoparkInterface
{
    public function setNumber_passengers($value)
    {
        $this->number_passengers = $value;
    }
    public function setBaggage_weight($value)
    {
        $this->baggage_weight = $value;
    }
    public function setVitrati_paliva_100_km($value)
    {
        $this->vitrati_paliva_100_km = $value;
    }
    public function setMaximum_travel_distance($value)
    {
        $this->maximum_travel_distance = $value;
    }
    public function setFactor($value)
    {
        $this->factor = $value;
    }

    public function setDistance($value)
    {
        $this->factor = $value;
    }
    public function setKilometer_rate($value)
    {
        $this->factor = $value;
    }
    public function setWater_category_coefficient($value)
    {
        $this->factor = $value;
    }
}
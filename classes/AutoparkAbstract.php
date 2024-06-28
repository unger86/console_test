<?php
namespace classes;

Abstract class AutoparkAbstract
{
    public $number_passengers;
    public $baggage_weight;
    public $vitrati_paliva_100_km;
    public $maximum_travel_distance;
    public $factor;

    public $distance;
    public $kilometer_rate;
    public $water_category_coefficient;

    public function calculate()
    {
        $zp_vodii = $this->distance * $this->kilometer_rate * $this->water_category_coefficient;
        return $zp_vodii + ($this->vitrati_paliva_100_km * $this->factor);
    }
}
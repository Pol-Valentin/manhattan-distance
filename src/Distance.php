<?php


namespace Kata\ManhattanDistance;


use Money\Money;

class Distance
{
    /** @var int */
    private $distance;

    public function __construct(int $distance)
    {
        $this->distance = $distance;
    }

    public function add(Distance $distance): Distance
    {
        return new Distance($this->distance + $distance->distance);
    }

    public function applyPriceRate(Money $priceRate): Money
    {
        return $priceRate->multiply($this->distance);
    }

    public function calculateDistanceIn(Distance $distanceMin, Distance $distanceMax): Distance
    {
        return new Distance(abs($distanceMax->distance - $this->distance - $distanceMin->distance));
    }
}
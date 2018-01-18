<?php


namespace Kata\ManhattanDistance;


use Money\Money;

class PriceRate
{
    /** @var Distance */
    private $distanceMax;
    /** @var Money */
    private $price;
    /** @var Distance */
    private $distanceMin;

    public function __construct(Distance $distanceMin, Distance $distanceMax, Money $price)
    {
        $this->distanceMin = $distanceMin;
        $this->distanceMax = $distanceMax;
        $this->price = $price;
    }

    public function applyTo(Distance $distance)
    {
        return $distance->applyPriceRate($this->price);
    }
}
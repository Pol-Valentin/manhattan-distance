<?php


namespace Kata\ManhattanDistance;


use Money\Money;

class PriceCalculator
{
    /** @var PriceRate[] */
    private $priceRates;

    public function __construct(PriceRate...$priceRates)
    {
        $this->priceRates = $priceRates;
    }


    public function calculatePriceToDistance(Distance $distance) : Money
    {
        foreach ($this->priceRates as $priceRate) {
            return $priceRate->applyTo($distance);
        }
    }
}
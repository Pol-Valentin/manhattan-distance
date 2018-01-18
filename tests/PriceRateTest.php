<?php

namespace tests\Kata\ManhattanDistance;

use Kata\ManhattanDistance\Distance;
use Kata\ManhattanDistance\PriceRate;
use Money\Currency;
use Money\Money;

class PriceRateTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_applies_to_distance()
    {
        $rate = new PriceRate(
            new Distance(0),
            new Distance(10),
            new Money('150', new Currency('EUR'))
        );
        static::assertEquals(
            new Money('300', new Currency('EUR')),
            $rate->applyTo(new Distance(2))
        );
    }

    /** @test */
    public function it_applies_to_a_greater_distance()
    {
        $rate = new PriceRate(
            new Distance(0),
            new Distance(10),
            new Money('150', new Currency('EUR'))
        );
        static::assertEquals(
            new Money('1500', new Currency('EUR')),
            $rate->applyTo(new Distance(20))
        );
    }
}

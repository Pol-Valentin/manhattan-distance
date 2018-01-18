<?php

namespace tests\Kata\ManhattanDistance;

use Kata\ManhattanDistance\Distance;
use Kata\ManhattanDistance\PriceCalculator;
use Kata\ManhattanDistance\PriceRate;
use Money\Currency;
use Money\Money;

class PriceCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /** @var PriceCalculator */
    private $sut;

    public function setUp()
    {
        $this->sut = new PriceCalculator(
            new PriceRate(
                new Distance(0),
                new Distance(10),
                new Money('150', new Currency('EUR'))
            ),
            new PriceRate(
                new Distance(10),
                new Distance(15),
                new Money('80', new Currency('EUR'))
            ),
            new PriceRate(
                new Distance(15),
                new Distance(PHP_INT_MAX),
                new Money('150', new Currency('EUR'))
            )
        );
    }

    /**
     * @test
     * @dataProvider providePriceRate
     */
    public function it_calculate_price(Distance $distance, Money $priceExpected)
    {
        static::assertEquals(
            $priceExpected,
            $this->sut->calculatePriceToDistance($distance)
        );
    }

    public function providePriceRate()
    {
        return [
            [new Distance(5), new Money('750', new Currency('EUR'))]
        ];
    }
}

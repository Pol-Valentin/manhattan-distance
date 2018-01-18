<?php

namespace tests\Kata\ManhattanDistance;

use Kata\ManhattanDistance\Distance;
use Money\Currency;
use Money\Money;

class DistanceTest extends \PHPUnit_Framework_TestCase
{
    /** @var Distance */
    private $sut;

    public function setUp()
    {
        $this->sut = new Distance(4);
    }

    /** @test */
    public function it_adds_distance()
    {
        static::assertEquals(
            new Distance(6),
            $this->sut->add(new Distance(2))
        );
    }

    /**
     * @test
     * @dataProvider provideDistanceBoundaries
     */
    public function it_calculate_distance_between_boundaries(
        Distance $distanceMin, Distance $distanceMax, Distance $expected
    )
    {
        static::assertEquals(
            $expected,
            $this->sut->calculateDistanceIn(
                $distanceMin,
                $distanceMax
            )
        );
    }

    /**
     * @test
     */
    public function it_applies_price_rate()
    {
        static::assertEquals(
            new Money('400', new Currency('EUR')),
            $this->sut->applyPriceRate(new Money('100', new Currency('EUR')))
        );
    }

    public function provideDistanceBoundaries()
    {
        return [
            'a cheval' => [new Distance(0), new Distance(4), new Distance(4)],
            'dedans' => [new Distance(1), new Distance(3), new Distance(2)],
            'a cheval avant' => [new Distance(1), new Distance(3), new Distance(2)],
            'a cheval après' => [new Distance(1), new Distance(3), new Distance(2)],
        ];
    }
}

/*
4, 5 -> 6, 0
4, 3 -> 5, 1
4, 0 -> 4, 4
4, 2 -> 3, 1
4, 0 -> 2, 2
*/
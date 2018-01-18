<?php

namespace tests\Kata\ManhattanDistance;

use Kata\ManhattanDistance\Distance;
use Kata\ManhattanDistance\Point1D;

class Point1DTest extends \PHPUnit_Framework_TestCase
{
    /** @var Point1D */
    private $sut;

    public function setUp()
    {
        $this->sut = new Point1D(-2);
    }

    /**
     * @test
     * @dataProvider provideCoordinatesForPoints
     */
    public function it_calculate_distance_to_point(Point1D $toPoint, Distance $expected)
    {
        static::assertEquals(
            $expected,
            $this->sut->distanceTo($toPoint)
        );
    }

    public function provideCoordinatesForPoints()
    {
        return [
            [new Point1D(1), new Distance(3)],
            [new Point1D(2), new Distance(4)],
            [new Point1D(-2), new Distance(0)],
        ];
    }
}

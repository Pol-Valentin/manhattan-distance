<?php

namespace tests\Kata\ScoreCalculator;

use Kata\ManhattanDistance\Distance;
use Kata\ManhattanDistance\Point1D;
use Kata\ManhattanDistance\Point2D;

class Point2DTest extends \PHPUnit_Framework_TestCase
{
    /** @var Point2D */
    private $sut;


    public function setUp()
    {
        $this->sut = new Point2D(new Point1D(0), new Point1D(0));
    }

    /**
     * @test
     */
    public function it_is_a_point()
    {
        self::assertInstanceOf(Point2D::class, $this->sut);
    }

    /**
     * @test
     * @dataProvider provideCoordinatesForPoints
     */
    public function it_calculate_distance_to_point(Point2D $destinationPoint, Distance $expectedDistance)
    {
        static::assertEquals(
            $expectedDistance,
            $this->sut->distanceTo($destinationPoint)
        );
    }

    public function provideCoordinatesForPoints()
    {
        return [
            [new Point2D(new Point1D(1), new Point1D(1)), new Distance(2)],
            [new Point2D(new Point1D(2), new Point1D(2)), new Distance(4)],
            [new Point2D(new Point1D(-2), new Point1D(-2)), new Distance(4)],
        ];
    }

}

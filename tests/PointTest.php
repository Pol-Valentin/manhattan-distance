<?php

namespace tests\Kata\ScoreCalculator;

use Kata\ManhattanDistance\Point;

class PointTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_is_a_point()
    {
        self::assertInstanceOf(Point::class, new Point());
    }
}

<?php

namespace tests\Kata\ManhattanDistance;

use Kata\ManhattanDistance\Distance;

class DistanceTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new Distance(0);
    }

    /** @test */
    public function it_adds_distance()
    {
        static::assertEquals(
            new Distance(2),
            $this->sut->add(new Distance(2))
        );
    }
}

<?php


namespace Kata\ManhattanDistance;


class Point1D
{
    /** @var int */
    private $integer;

    public function __construct(int $integer)
    {
        $this->integer = $integer;
    }

    public function distanceTo(Point1D $point)
    {
        return new Distance(abs($this->integer - $point->integer));
    }
}
<?php

namespace Kata\ManhattanDistance;

class Point2D
{
    private $x;
    private $y;

    public function __construct(Point1D $x, Point1D $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function distanceTo(Point2D $point): Distance
    {
        return $this->x->distanceTo($point->x)->add($this->y->distanceTo($point->y));
    }
}
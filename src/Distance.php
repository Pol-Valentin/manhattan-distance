<?php


namespace Kata\ManhattanDistance;


class Distance
{
    /** @var int */
    private $distance;

    public function __construct(int $distance)
    {
        $this->distance = $distance;
    }

    public function add(Distance $distance)
    {
        return new Distance($this->distance + $distance->distance);
    }
}
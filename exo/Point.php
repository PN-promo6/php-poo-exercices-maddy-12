<?php

namespace exo;

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "($this->x,$this->y)";
    }

    public function distance($otherPoint)
    {
        $distanceX = $otherPoint->x - $this->x;
        $distanceY = $otherPoint->y - $this->y;
        //pow c'est power = au carré
        return sqrt(pow($distanceX, 2) +  pow($distanceY, 2));
    }
}

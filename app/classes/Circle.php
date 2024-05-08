<?php

namespace App\classes;

use App\interfaces\GetAreaInterface;
use App\interfaces\GetPerimeterInterface;

class Circle implements GetAreaInterface
{
    const PI = 3.141592653589;

    private float $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea():float
    {
        $area = self::PI * $this->radius ** 2;
        return number_format($area, 2, '.', '');
    }

    public function getPerimeter(): float
    {
        $perimeter = 2 * self::PI * $this->radius;
        return number_format($perimeter, 2, '.', '');
    }
}
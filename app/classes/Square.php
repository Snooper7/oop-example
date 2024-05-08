<?php

namespace App\classes;

use App\interfaces\GetAreaInterface;
use App\interfaces\GetPerimeterInterface;

class Square implements GetAreaInterface, GetPerimeterInterface
{
    private float $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getArea(): float
    {
        $area = $this->side ** 2;
        return number_format($area, 2, '.', '');
    }

    public function getPerimeter(): float
    {
        $perimeter = 4 * $this->side;
        return number_format($perimeter, 2, '.', '');
    }
}
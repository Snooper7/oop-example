<?php

namespace App\classes;

use App\interfaces\GetAreaInterface;
use App\interfaces\GetPerimeterInterface;

class Triangle implements GetAreaInterface, GetPerimeterInterface
{
    private float $firstSide;
    private float $secondSide;
    private float $thirdSide;

    public function __construct($firstSide, $secondSide, $thirdSide)
    {
        $this->firstSide = $firstSide;
        $this->secondSide = $secondSide;
        $this->thirdSide = $thirdSide;
    }

    public function getArea(): float
    {
        $halfPerimeter = ($this->firstSide + $this->secondSide + $this->thirdSide) / 2;
        $area = sqrt($halfPerimeter * ($halfPerimeter - $this->firstSide) * ($halfPerimeter - $this->secondSide) * ($halfPerimeter - $this->thirdSide));
        return number_format($area, 2, '.', '');
    }

    public function getPerimeter(): float
    {
        $perimeter = $this->firstSide + $this->secondSide + $this->thirdSide;
        return number_format($perimeter, 2, '.', '');
    }
}
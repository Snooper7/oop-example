<?php

namespace App\classes;

use App\interfaces\GetAreaInterface;
use App\interfaces\GetPerimeterInterface;

class Shape
{
    protected string $color;

    public function printInfo(): void
    {
        printf("Цвет: " . $color);
        printf("Площадь: " . getArea());
        printf("Периметр: " . getPerimeter());
    }
}
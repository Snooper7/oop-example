<?php

use App\classes\Circle;
use App\classes\Shape;
use App\classes\Square;
use App\classes\Triangle;

require_once __DIR__ . '/vendor/autoload.php';

$circle = new Circle(3);
$square = new Square(5);
$triangle = new Triangle(5, 3, 7);

echo $circle->getArea() ."\n";
echo $square->getArea() ."\n";
echo $triangle->getArea() ."\n";

echo $circle->getPerimeter() ."\n";
echo $square->getPerimeter() ."\n";
echo $triangle->getPerimeter() ."\n";

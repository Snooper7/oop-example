<?php

use App\classes\Shape;

require_once __DIR__ . '/vendor/autoload.php';

$shape = new Shape();

echo $shape->getShape();

<?php

require_once 'rectangle.php'; 
require_once 'square.php';

$rectangle = new Rectangle(6,58);
// echo $rectangle->area() . PHP_EOL;

$square = new Square(2,3);
echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;



?>
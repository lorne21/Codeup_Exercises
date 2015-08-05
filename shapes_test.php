<?php

require_once 'rectangle.php'; 
require_once 'square.php';

$rectangle = new Rectangle(6, 4);
echo $rectangle->area() . PHP_EOL;
echo $rectangle->perimeter() . PHP_EOL; 


$square = new Square(2);
echo $square->perimeter() . PHP_EOL;
echo $square->area() . PHP_EOL; 



?>
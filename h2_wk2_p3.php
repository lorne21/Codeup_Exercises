<?php

$cars = array(
  'Toyota Solara' => array(
    'year' => 2001,
    'doors' => 2,
    'color' => 'gray',
    'mileage' => 100000,
    'sunroof' => true,
    'convertable' => false,
    'license' => 'JSRULZ',
  ),

  'Honda Odyssey' => array(
    'year' => 2004, 
    'doors' => 4,
    'color' => 'maroon',
    'mileage' => 60000,
    'sunroof' => false,
    'convertable' => false,
    'license' => 'ILUVPHP',
  ),

  'Cadillac Escalade' => array(
    'year' => 2014,
    'doors' => 4,
    'color' => 'white',
    'mileage' => 5000,
    'sunroof' => false,
    'convertable' => false,
    'license' => 'HTML5',
  ),

);



function listCars($array){
	foreach ($array as $carName => $details) {
		echo "I own a " . $details['year'] . " " . $carName . ". Details Below:" . PHP_EOL; 
		echo "------------------------------------" . PHP_EOL;
		echo $details['doors'] . " Door " . $details['year'] . " " . $carName . PHP_EOL; 
		echo "Color: " . $details['color'] . PHP_EOL;
		echo "Mileage: " . $details['mileage'] . PHP_EOL; 
		if ($details['sunroof']){
			echo "Sunroof: Yes" . PHP_EOL; 	
		} else {
			echo "Sunroof: No" . PHP_EOL; 
		}
		if ($details['convertable']){
			echo "Convertible: Yes" . PHP_EOL; 	
		} else {
			echo "Convertible: No" . PHP_EOL; 
		}
		echo "License No: " . $details['license'] . PHP_EOL;
		echo " " . PHP_EOL;
	}
}

listCars($cars); 
























?>
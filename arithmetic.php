<?php

function add($a, $b){
	errorCheck($a, $b); 
	echo $a + $b . PHP_EOL; 
}

function subtract($a, $b){
	errorCheck($a, $b);
    echo $a - $b . PHP_EOL; 
}

function multiply($a, $b){
	errorCheck($a, $b);
    echo $a * $b . PHP_EOL; 
}

function divide($a, $b){
	errorCheck($a, $b);
    echo $a / $b . PHP_EOL; 
}

function modulous($a , $b){
	errorCheck($a, $b);
	echo $a % $b . PHP_EOL; 
}

function errorCheck($a , $b){
	if (is_numeric($a) && is_numeric($b)){
	} else {
		echo "Both arguments must be numbers" . PHP_EOL; 
		echo "Your first argument was a " . gettype($a) . ". Your second argument was a " . gettype($b) . "." . PHP_EOL; 
		exit; 
	}

	if ($b == 0){
		echo "Your second argument cannot be zero.";
	}



}

// Add code to test your functions here
// add(1 , 4);
// subtract(9, 7);
// multiply(2 , 3);
divide(10, 3);
// modulous(10, 2);
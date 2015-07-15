<?php

function add($a, $b){
	$error = errorCheck($a, $b); 
	if ($error){
		return $a + $b . PHP_EOL;
	} 
}

function subtract($a, $b){
	$error = errorCheck($a, $b);
    if ($error){
    	return $a - $b . PHP_EOL; 
    }
}

function multiply($a, $b){
	$error = errorCheck($a, $b);
    if ($error){
    	return $a * $b . PHP_EOL; 
    }
}

function divide($a, $b){
	$error = errorCheck($a, $b);
	if ($b == 0){
		echo "Your second argument cannot be zero." . PHP_EOL;
		return false; 
	}
    return $a / $b . PHP_EOL; 
}

function modulous($a , $b){
	$error = errorCheck($a, $b);
	if ($b == 0){
		echo "Your second argument cannot be zero." . PHP_EOL;
		return false; 
	}
	return $a % $b . PHP_EOL; 
}

function errorCheck($a , $b){
	if (is_numeric($a) && is_numeric($b)){
		return true; 
	} else { 
		echo "Both arguments must be numbers" . PHP_EOL; 
		echo "Your first argument was a " . gettype($a) . ". Your second argument was a " . gettype($b) . "." . PHP_EOL; 
		return false; 
	}
}


// Add code to test your functions here
echo add(1 , 4) . PHP_EOL;
echo subtract(9, 7) . PHP_EOL;
echo multiply(2 , 3) . PHP_EOL;
echo divide(6, 0) . PHP_EOL;
echo modulous(10, 2) . PHP_EOL;


?>
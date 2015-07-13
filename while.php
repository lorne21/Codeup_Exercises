<?php

$test = 5;

while ($test <= 15){
	if ($test % 2 == 0 && $test % 3 == 0){
		echo "{$test} is divisible by two and three" . PHP_EOL;
	} else if ($test % 2 == 0){
		echo "{$test} is divisible by two" . PHP_EOL;
	} else {
		echo $test . PHP_EOL; 
	}
	$test += 1;
}

?>
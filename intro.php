<?php

// this outputs name
// $name = 'Lorne';
// echo "Hello World" . PHP_EOL; 
// echo "My name is $name" . PHP_EOL; 

// this gets sum of all divisible by 5 or 3
// $numbercount = [];
// for ($i = 1; $i < 1000; $i++){
// 	if ($i % 5 == 0){
// 		array_push($numbercount , $i);
// 	} else if ($i % 3 == 0){
// 		array_push($numbercount , $i);
// 	} 
// }  

// echo array_sum($numbercount) . PHP_EOL; 

// this function get fibonacci
// $fib = 1; 
// $a = 0;
// $b = 1; 
// $fibArray = []; 
// for ($i = 0; $fib < 4000000; $i++){
// 	$fib = $a + $b; 
// 	// echo $fib . PHP_EOL; 
// 	$a = $b; 
// 	$b = $fib;
// 	if ($fib % 2 == 0){	
// 		array_push($fibArray , $fib);
// 	}
// }

// echo array_sum($fibArray) . PHP_EOL; 

// this gets largest gmp_prob_prime 

$a = 600851475143; 
for ($i = 2; $i <= $a; $i++) {
	if ($i % 2 != 0){
		$isPrime = $a / $i; 
		if (is_integer($isPrime) == true){
			echo $isPrime . PHP_EOL;
		} 
	}
	
}






?>
<?php

$name = 'Lorne';
echo "Hello World" . PHP_EOL; 
echo "My name is $name" . PHP_EOL; 

$numbercount = [];
for ($i = 1; $i < 1000; $i++){
	if ($i % 5 == 0){
		array_push($numbercount , $i);
	} else if ($i % 3 == 0){
		array_push($numbercount , $i);
	} 
}  

echo array_sum($numbercount) . PHP_EOL; 

?>
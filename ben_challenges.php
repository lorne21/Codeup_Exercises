<?php

// alphabet soup
// take a string and reverse each word in it

$str = "hello codeup";

function alphabet_soup($str){
	$alphaArray = explode(" ", $str); 
	print_r($alphaArray);
	$reverseArray = []; 

	foreach ($alphaArray as $word) {
		$revword = strrev($word);
		echo $revword . PHP_EOL;
		$reverseArray[] = $revword;   
	}
	$str = implode(" ", $reverseArray);
	return $str; 
}

echo alphabet_soup($str);








?>
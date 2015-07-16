<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// write a function called combine arrays that takes two array values 
// and returns a new array with values from both

// if arrays have same value at same index, add only once

// if values differ, value at names should be added, then from compare

function combine_arrays($names, $compare){
	$newArray = [];
	for ($i = 0; $i <= 4; $i++){
		if ($names[$i] == $compare[$i]){
			array_push($newArray, $names[$i]);
		} else {
			array_push($newArray, $names[$i]);
			array_push($newArray, $compare[$i]);
		}
	}
	print_r($newArray);
}

// combine_arrays($names, $compare);

function betterCombine($names, $compare){
	$newArray = [];
	$count = 0;
	foreach($names as $key => $value) { 
		$namesPush = array_push($newArray, $names[$count]);
		if ($names[$count] == $compare[$count]){   
			$namesPush;     
			$count++; 
		} else {
			$namesPush; 
			array_push($newArray, $compare[$count]);
			$count++; 
		}
	}
	return ($newArray);
}

// betterCombine($names, $compare);

function evenBetter($names, $compare){
	$newArray = [];
	foreach ($names as $key => $value) {
		$namesPush = array_push($newArray, $value);
		$list2 = array_shift($compare);
		if ($value == $list2){
			$namesPush; 
		} else {
			$namesPush; 
			array_push($newArray, $list2);
		}
	}
	return $newArray; 
}

print_r(evenBetter($names, $compare));



?>
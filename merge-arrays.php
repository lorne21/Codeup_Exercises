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

combine_arrays($names, $compare);








?>
<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// this function return true or false if the name is found 
function getName($person, $names){
	$result = array_search($person, $names); 
	if ($result === false){
		return 'False' . PHP_EOL; 
	} else {
		return 'True' . PHP_EOL;
	}
}

echo getName('Tina', $names);
echo getName('Bob', $names); 

// this function compares the two arrays and returns the values in common
function compare($names, $compare){
	foreach ($names as $key => $value) {
		$check = array_search($value, $compare); 
		if ($check !== false){
			echo $value . PHP_EOL;  
		}
	}
}

compare($names, $compare); 
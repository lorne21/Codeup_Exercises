<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// this function return true or false if the name is found 
function getName($person, $names){
	$result = array_search($person, $names); 
	if ($result === false){
		return false; 
	} else {
		return true;
	}
}

echo getName('Tina', $names) . PHP_EOL;
echo getName('Bob', $names) . PHP_EOL; 

// this function compares the two arrays and returns the values in common
function compare($names, $compare){
	$common = 0;
	foreach ($names as $key => $value) {
		$check = array_search($value, $compare); 
		if ($check !== false){   
			$common++;  
		}
	}
	return "These arrays have {$common} things in common\n"; 
}

echo compare($names, $compare);



?> 
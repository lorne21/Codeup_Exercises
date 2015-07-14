<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thingers){
	if (is_integer($thingers)){
		echo "{$thingers} is an integer\n";
	} else if (is_float($thingers)){
		echo "{$thingers} is a float\n";
	} else if (is_bool($thingers)){
		echo "{$thingers} is a boolean\n";
	} else if (is_array($thingers)){
		echo "{$thingers} is an array\n";
	} else if (is_null($thingers)){
		echo "{$thingers} is null\n";
	} else if (is_string($thingers)){
		echo "{$thingers} is a string\n";
	}
}

foreach($things as $scales){
	if (is_scalar($scales)){
		echo "{$scales} is a scalar\n"; 
	}
}

foreach($things as $vals){
	if (is_array($vals)){
		foreach($vals as $innerarray){
			echo "$innerarray" . PHP_EOL; 
		}
	} else {
		echo "$vals" . PHP_EOL; 
	}
}









?>
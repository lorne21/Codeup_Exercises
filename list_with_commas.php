<?php

// Converts array into list n1, n2, ..., and n3
function humanizedList($array, $sort = false) {
	if ($sort){
		asort($array);
	}
	$lastItem = array_pop($array);
	$newString = implode(', ', $array);
	return $newString . ", and " . $lastItem; 
}
// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark, Lorne Barfield';
// TODO: Convert the string into an array
$physicistsArray = explode(', ', $physicistsString);




 

// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray, true);
// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";











?>
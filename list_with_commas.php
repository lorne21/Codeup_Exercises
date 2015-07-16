<?php

// Converts array into list n1, n2, ..., and n3
function humanizedList($array) {
	$lastItem = array_pop($array);
	$newString = implode(', ', $array);
	return $newString . ", and " . $lastItem; 
}
// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// TODO: Convert the string into an array
$physicistsArray = explode(', ', $physicistsString);

asort()


 

// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray);
// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";











?>
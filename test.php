<?php

$adjectives = array(
	'Metallic',
	'Incessantly Talking',
	'Glowing',
	'Explosive',
	'Impervious',
	'Super Stretchy', 
	'Electric', 
	'Extremely Visible', 
	'Screaming', 
	'Rapidly Pulsating'
); 

$nouns = array(
	'Fingernails',
	'Genitals',
	'Nostrils',
	'Earlobes',
	'Belly Lint',
	'Breath', 
	'Farts',
	'Pinky Toes', 
	'Nipples',
	'Armpits'
);

function getRandom($array){
	$part = mt_rand(0,9); 
	$arrayChoice = $array[$part];
	echo $arrayChoice . PHP_EOL; 
}

$super = getRandom($adjectives);
$power = getRandom($nouns); 


// echo $adjectives[0];

?>
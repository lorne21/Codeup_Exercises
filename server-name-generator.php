<?php

$adjectives = array(
	'Metallic',
	'Incessantly Talking'
	'Glowing',
	'Explosive',
	'Impervious'
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
	return $arrayChoice . PHP_EOL; 
}

$super = getRandom($adjectives);
$power = getRandom($nouns); 


?>

<html>
<head>
	<title>Name Generator </title>
</head>
<body>
	<h1 align="center">What's Your Super Power?</h1>

	<div align="center"><?php echo $super . " " . $power; ?></div>

</body>
</html>

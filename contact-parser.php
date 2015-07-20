<?php

function parseContacts($filename) {
    
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    // echo $contents; 
    fclose($handle);
    $firstLevel = explode("\n", $contents);
    $contacts = [];
    foreach ($firstLevel as $value) {
    	$fields = ['Name', 'Number']; 
    	$secondLevel = array_combine ($fields, explode ("|", $value));
    	$secondLevel['Number'] = phoneNumber($secondLevel['Number']); 
    	array_push($contacts, $secondLevel);

    }	

    return $contacts;
}

function phoneNumber($someNumber){
	$someNumber = substr($someNumber, 0, 3) . '-' . substr($someNumber, 3, 3) . '-' . substr($someNumber, 6, 4);
	return $someNumber; 
}

var_dump(parseContacts('contacts.txt'));

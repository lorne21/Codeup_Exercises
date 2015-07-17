<?php

function parseContacts($filename) {
    
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    // echo $contents; 
    fclose($handle);
    $firstLevel = explode("\n", $contents);
    $contacts = [];
    foreach ($firstLevel as $key => $value) {
    	$inner['Name'] = explode ("|", $value)[0];
    	$inner['Number'] = explode ("|", $value)[1];
    	$inner['Number'] = phoneNumber($inner['Number']); 
    	array_push($contacts, $inner);
    }	


    // todo - read file and parse contacts

    return $contacts;
}

function phoneNumber($someNumber){
	$someNumber = substr($someNumber, 0, 3) . '-' . substr($someNumber, 3, 3) . '-' . substr($someNumber, 6, 4);
	return $someNumber; 
}

var_dump(parseContacts('contacts.txt'));

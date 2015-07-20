<?php

function logMessage($logLevel, $message){
    
    $fileNameDate = date("Y-m-d", time()); 
    
    $filename = 'log-' . $fileNameDate . '.log';
    $handle = fopen($filename, 'a');

  	$date = date("Y-m-d H-i-s", time());
  	
  	fwrite($handle, $date . " " . $logLevel . ", " . $message . PHP_EOL);
    
    fclose($handle);

}

// logMessage("INFO", "This is an info message.") . PHP_EOL;
// logMessage("ERROR", "This is an info message.") . PHP_EOL;

function logInfo(){
	$message = "The crows seemed to be calling his name, thought Caw."; 
	logMessage("INFO", $message); 
}

// logInfo(); 

function logError(){
	$message = "You shall not PASS!!!"; 
	logMessage("ERROR", $message);
}

// logError();

echo time();
?>
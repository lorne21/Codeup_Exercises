<?php

class Log
{
	public $date;

	public $filename;
	
	public function logMessage($logLevel, $message){

	    $handle = fopen($this->filename, 'a');

	  	$date = date("Y-m-d H-i-s", time());
	  	
	  	fwrite($handle, $date . " " . $logLevel . ", " . $message . PHP_EOL);
	    
	    fclose($handle);
	}
	
	public function info($message){
		return $this->logMessage("INFO", $message);
	}
	
	public function error($message){
		return $this->logMessage("ERROR", $message);
	}

}




?>
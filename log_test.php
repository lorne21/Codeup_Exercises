<?php

require_once 'Log.php';

$newlog = new Log('cli');

$newlog->logMessage("INFO", "This is an info message.");

$newlog->info("The crows seemed to be calling his name, thought Caw.");

$newlog->error("Slipped on a banana peel");












?>
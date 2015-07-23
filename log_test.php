<?php

require_once 'Log.php';

$newlog = new Log();

$newlog->date = date("Y-m-d", time());

$newlog->filename = 'log-' . $newlog->date . '.log';

$newlog->logMessage("INFO", "This is an info message.") . PHP_EOL;

$newlog->info("The crows seemed to be calling his name, thought Caw.");

$newlog->error("Slipped on a banana peel");












?>
<?php
require '../vendor/autoload.php';
use Class\Logger;

$log=new Logger();
$log->write(['Fatal Error','Parse Error','There is a problem parsing the package']);
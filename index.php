<?php
require_once __DIR__.'/vendor/autoload.php';

use Class\Logger\Logger;

$log=new Logger();
echo $log->show();
//$log->write(['level'=>'Fatal Error','message'=>'Parse Error','context'=>'There is a problem parsing the package']);
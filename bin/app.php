<?php
require dirname(__DIR__) . '/autoload.php';
$GLOBALS['context'] = 'cli-api-app';
exit((require dirname(__DIR__) . '/bootstrap.php')($GLOBALS['context']));

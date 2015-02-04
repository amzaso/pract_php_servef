<?php


use core\models\Dispatch;
require_once ('../autoload.php');


$config = core\models\CoreConfig::getConfig();
// $MysqlAdapter = new core\adapters\MysqlAdapter($config['db']);


    

require_once ('../modules/core/src/core/models/parseUrl.php');

$request = parseURL();
//$request = routeUrl($request);


// echo '<pre>';
// print_r($request);
// echo '</pre>';


$dispatch = new core\models\Dispatch($request,$config);
$dispatch->run();










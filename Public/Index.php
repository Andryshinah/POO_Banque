<?php
use App\Autoloader;
use App\Core;
define('ROOT',dirname(__DIR__));
require_once ROOT.'/Autoloader.php';
Autoloader::Register();
$app=new App\Core\Main;
$app->start();
?>
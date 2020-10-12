<?php
require_once __DIR__ ."/vendor/autoload.php";
$file = new \Karamel\Env\Drivers\File(__DIR__ ."/.env");
var_dump($file->read());

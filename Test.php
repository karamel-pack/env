<?php
require_once __DIR__ ."/vendor/autoload.php";
$file = \Karamel\Env\EnvFactory::build("file",__DIR__ ."/.env");
var_dump($file->get("classs"));

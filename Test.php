<?php
require_once __DIR__ ."/vendor/autoload.php";
$file = \Karamel\Env\Facade\Env::setPath("file",__DIR__ ."/.env");
var_dump(env("name"));
//var_dump(\Karamel\Env\Facade\Env::get("name"));
//var_dump($file->get("classs"));

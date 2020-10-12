<?php
require_once __DIR__ ."/vendor/autoload.php";
$file = new \Karamel\Env\Drivers\File(__DIR__ ."/.senv");
var_dump($file->get("class"));

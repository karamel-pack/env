<?php
function env($key,$def = null){
    return \Karamel\Env\Facade\Env::get($key,$def);
}
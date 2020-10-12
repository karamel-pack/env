<?php
namespace Karamel\Env\Interfaces;
interface IEnv {
    public function get($key , $default = null) ;
}
<?php

namespace Karamel\Env\Facade;

use Karamel\Env\EnvFactory;
use Karamel\Env\Exceptions\EnvTypeNotResolvedException;

class Env
{
    private static $instance = null;
    private static $type;
    private static $path;

    public static function setPath($type,$path)
    {
        self::$path = $path ;
        self::$type = $type;
        
    }
    
    public static function get($key, $default = null)
    {
        return self::getInstance()->get($key,$default);
    }

    private static function getInstance()
    {
        if (self::$instance)
            return self::$instance;
        if (self::$path === null || self::$type === null)
            throw new EnvTypeNotResolvedException();
        self::$instance = EnvFactory::build(self::$type, self::$path);
        return self::$instance;

    }
}
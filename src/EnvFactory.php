<?php

namespace Karamel\Env;
use Karamel\Env\Drivers\File;
use Karamel\Env\Exceptions\EnvTypeNotResolvedException;

class EnvFactory
{
    public static function build($type, $path)
    {
        switch ($type){
            case "file" :
                return new File($path);
                break;
            default:
                throw new EnvTypeNotResolvedException();
        }
    }
}
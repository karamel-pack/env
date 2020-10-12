<?php

namespace Karamel\Env\Drivers;

use Karamel\Env\Exceptions\EnvFileInvalidFormatException;
use Karamel\Env\Exceptions\EnvFileNotFoundException;
use Karamel\Env\Interfaces\IEnv;

class File implements IEnv
{

    private $path;
    private $envs;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function get($key, $default = null)
    {

    }

    public function read()
    {
        if ($this->envs)
            return $this->envs;

        if (!file_exists($this->path))
            throw new EnvFileNotFoundException();

        $this->envs = [];
        $content = file_get_contents($this->path);
        $contents = explode("\n", $content);

        foreach ($contents as $key => $item) {
            $items = explode("=", $item);
            if (count($items) < 2)
                throw new EnvFileInvalidFormatException();

            $key = $items[0];
            $items = array_slice($items, 1);
            if (count($items) > 1)
                $value = implode("=", $items);
            else
                $value = $items[0];

            $this->envs[$key] = $value ;
        }

        return $this->envs ;

    }


}


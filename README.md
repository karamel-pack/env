#Karamel/Env <br />
Read environment variables throughout the project using the env() function
#Why .env?
You may need a config file in your PHP project that you can use to define your environment variables and use them throughout the project.
You can use this package to meet your needs
##Installation
Installation is super-easy via Composer:


```
$ composer require karamel/env
```

##Usage
After installing the package, call the setPath method in your project bootstrap  file (or index.php file) to set the settings below
```
\Karamel\Env\Facade\Env::setPath("file",__DIR__."./.env");
```

In the above method : <br />
 the first argument of the function determines the driver used, which (currently) must be equal to the value of the `file`. <br />

The second argument also determines the address of your config file . <br />

###contents of the config file
The contents of the config file should be as follows :
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=site_shahreparche
DB_USERNAME=root
DB_PASSWORD=123456

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
```

In this file, the value before the symbol `=` key and the value after it is the value . </br >

###Use config using the env($key , $default = null) method

The `env()` method is called as follows and accepts two inputs:
The first input is equal to your desired key and the second value is equal to the default value, which is optional
If your key is not in the .env file and you set the default value, the specified value will be returned to you . 
###samples
```shell
echo env("DB_CONNECTION") 
// mysql
```
```shell
echo env("foo") 
// NULL
```

```shell
echo env("foo","bar") 
// bar
```

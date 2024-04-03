<?php 

    require __DIR__.'/vendor/autoload.php';
    define('BASE',__DIR__);
    $routes=require 'routes.php';
    //env
    $dotenv = Dotenv\Dotenv::createMutable(__DIR__);
    $dotenv->load();
    //services container
    $c=new App\Container;
    $c->bind('db', function () {
        $config = require BASE.'/config.php';
        return new App\Database($config);}
    );
    

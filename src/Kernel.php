<?php

namespace App;

class Kernel
{
    protected static $container;

    

    public static function container()
    {
        if(!self::$container){
            self::$container=new Container;
        }
        return self::$container;
    }

    public static function bind($key, $resolver)
    {
        self::container()->bind($key, $resolver);
    }

    public static function resolve($key)
    {
        
        return static::container()->get($key);
    
    }
}
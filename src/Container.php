<?php 


namespace App;

use Exception;

class Container
{
    protected static $services = [];

    public static function bind($key, $resolver)
    {
    
        self::$services[$key] = $resolver;
    
    }

    /**
     * @throws Exception
     */
    public function get($key)
    {

        if (!array_key_exists($key, static::$services)) {
            throw new Exception("No matching binding found for {$key}");
        }
        $resolver =static::$services[$key];

        return call_user_func($resolver);
    }
}
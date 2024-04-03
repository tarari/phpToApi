<?php

return [
    
        'host' => 'localhost',
        'port' => 3306,
        'dbuser'=>$_ENV['DB_USER'],
        'dbname' => $_ENV['DB_NAME'],
        'dbpasswd'=>$_ENV['DB_PASSWORD'],
        'charset' => 'utf8mb4'
];
<?php 
use App\Route;

return $routes=[
    new Route('/api/users/{id}', 'GET', 'UserController@show'),
    new Route('/api/users', 'GET', 'UserController@index'),
    new Route('/api/users', 'POST', 'UserController@store'),
    new Route('/api/users/{id}', 'DELETE', 'UserController@destroy'),
    new Route('/api/users/{id}', 'PUT', 'UserController@update'),

    

];
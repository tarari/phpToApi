# phpToAPI

This code allows you easily to implement a Retful API with PHP.

## Implementation

In `routes.php`, implements your allowed routes and ENDPOINTS like the example:
```
    return $routes=[
    new Route('/api/users/{id}', 'GET', 'UserController@show'),
    new Route('/api/users', 'GET', 'UserController@index'),
    new Route('/api/users', 'POST', 'UserController@store'),
    new Route('/api/users/{id}', 'DELETE', 'UserController@destroy'),
    new Route('/api/users/{id}', 'PUT', 'UserController@update'),

];
```
In `config.php` we write the configuration vars. These vars are feeded from .env file.
```
    return [
    
        'host' => 'localhost',
        'port' => 3306,
        'dbuser'=>$_ENV['DB_USER'],
        'dbname' => $_ENV['DB_NAME'],
        'dbpasswd'=>$_ENV['DB_PASSWORD'],
        'charset' => 'utf8mb4'
];
```
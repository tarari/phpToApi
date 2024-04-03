# phpToAPI

This code allows you easily to implement a Retful API with PHP.

## Implementation

In `routes.php`, implements your allowed routes and ENDPOINTS like the example:
````
    return $routes=[
    new Route('/api/users/{id}', 'GET', 'UserController@show'),
    new Route('/api/users', 'GET', 'UserController@index'),
    new Route('/api/users', 'POST', 'UserController@store'),
    new Route('/api/users/{id}', 'DELETE', 'UserController@destroy'),
    new Route('/api/users/{id}', 'PUT', 'UserController@update'),

];
```
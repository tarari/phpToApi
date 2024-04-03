<?php 


    namespace App;

    class Router{
        protected Request $request;
        function __construct(Request $request)
        {
            $routes=require BASE.'/routes.php';
            $uri=$request->uri();
            $method=$request->method();
            $row=null;
            foreach($routes as $route){
                if($request->param()){
                    $route->setPath(str_replace('{id}',$request->param(),$route->path()));  
                }
                if($route->path()===$uri && $route->method()===$method){
                    $row=$route;
                }
            }
            if ($row==null) {
                Response::sendError("Not Found");
                
                exit;
            }else{
            
                $this->dispatch($row,$request);
            }     
        }
        function dispatch($route,$request){
            
            switch($route->method()){
                case 'GET':
                    $data=$request->param();
                    break;
                case 'PUT':
                case 'DELETE':
                    $data=['id'=>$request->param(),'params'=>file_get_contents('php://input')];
                    break;
                case 'POST':
                    $data=file_get_contents('php://input');
                    break;
                    default:break;
            }
        
            $controller='\\App\Controllers\\'.explode('@',$route->controller())[0];
            $method=explode('@',$route->controller())[1];
            $reflection = new \ReflectionClass($controller);
            $controller = $reflection->newInstance();
            $method = $reflection->getMethod($method);
            $method->invoke($controller, $data);
        }


    }

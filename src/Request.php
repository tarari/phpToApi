<?php 

    namespace App;

    final class Request{

        protected $uri;
        protected $pre_uri;
        protected $method;
        protected $param;
        public $parameters;

        function __construct()
        {
            
            $this->uri=rtrim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH ),'/');
    
            $this->method=$_SERVER['REQUEST_METHOD'];

            $arr=explode('/',$this->uri);
        
            
            end($arr)?"":array_pop($arr);
        
            if(count($arr)==4){ 
                $this->pre_uri=$this->uri;
                $this->param=end($arr); 
        
                array_pop($arr); 
                //$this->uri=implode('/',$arr);    
            }
            
    
        }
        function method(){
            return $this->method;
        }
        function uri(){
            return $this->uri;
        }
        function pre_uri(){
            return $this->pre_uri;
        }
        function param(){
           
            return $this->param;
        }

    }
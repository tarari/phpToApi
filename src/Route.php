<?php 




    namespace App;

    use App\Request;

    class Route{

        protected string $path;
        protected string $method;
        protected string $controller;
    
        public function __construct($path,$method,$controller)
        {
        
            $this->path=$path;
            $this->method=$method;
            $this->controller=$controller;
        }

        public function setPath($path){
            $this->path=$path;
            return $this;
        }
        public function path(){  
            return $this->path;   
        }

        public function method(){
            return $this->method;
        }
        public function controller(){
            return $this->controller;
        }
    }
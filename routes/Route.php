<?php

class Route
{
    protected $route_list =[];
    public $name = "sharif";

    public function GET($url,$controller){
        $function =explode('@',$controller)[1];
        $controller =explode('@',$controller)[0];
        $this->route_list[]=[
            'method'=>"GET",
            'url'=> $url,
            'controller'=> $controller,
            'function'=> $function,
        ];
    }
    public function POST($url,$controller){
        $function =explode('@',$controller)[1];
        $controller =explode('@',$controller)[0];
        $this->route_list[]=[
            'method'=>"POST",
            'url'=> $url,
            'controller'=> $controller,
            'function'=> $function,
        ];
    }
        public function start(){
            $request_method=$_SERVER['REQUEST_METHOD'];
            $request_url=$_SERVER ['REQUEST_URI'];
            
            $target_route=[];
            foreach ($this->route_list as $route) {
                $url=$route['url'];
                $method=$route['method'];

                if($url== $request_url){
                    if ($method==$request_method){
                        $target_route= $route;
                  
                    }
                    else{
                        echo " error 500 request method not support";
                    }
                   
                }
                
               
            }
            if(!count($target_route)){
                echo "error page not found";
            }
            else{
                $controller = $target_route['controller'];
                $function = $target_route['function'];
                include_once("./App/Http/Controller/$controller.php");
                $controller = new $controller();
                $controller->$function();

            }
    
        }
    
}

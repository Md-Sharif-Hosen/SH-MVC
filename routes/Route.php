<?php

use App\Http\Controller\WebsiteController;

class Route
{
    protected $route_list =[];

    public function GET($url,$controller){
        $function =explode('@',$controller)[1];
        $controller =explode('@',$controller)[0];
        $this->route_list[]=[
            'method'=>"GET",
            'url'=> $url,
            'controller'=> $controller,
            'function'=> $function,
        ];
        return $this;
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
        return $this;
    }

    public function params()
    {
        $route_last_index=count($this->route_list)-1;
        $this->route_list[$route_last_index]['params'] = func_get_args();
        return $this;
    }
        public function start(){
            // dd($this);
            $request_method=$_SERVER['REQUEST_METHOD'];
            $request_url=explode('?',$_SERVER ['REQUEST_URI'])[0];
            
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
                return 0;
            }
            if (isset($target_route['params']) && count($target_route['params'])){
                foreach ($target_route['params'] as $param){
                    if (!isset($_REQUEST[$param])){
                        echo "error page not found, $param parameter is missing.";
                    //    dd($target_route,$_REQUEST);
                        return 0;
                    }
                }
            }
            $controller = $target_route['controller'];
            $function = $target_route['function'];
            include_once(".\\App\\Http\\Controller\\$controller.php");
            $controller = new  WebsiteController();
            $controller->$function(...array_values($_REQUEST));

    
        }
    
}

<?php
namespace App\Routing;

use AltoRouter;


class RouteDispatcher{
    public $match;
    public $controller;
    public $method;

    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();

        if($this->match){
            list($controller,$method) = explode('@', $this->match['target']);
            $this->controller = '\App\Controllers' . $controller;
            $this->method = $method;

            if(is_callable([$this->controller, $this->method])){
                call_user_func_array([$this->controller, $this->method], $this->match['params']);
            }else{
                echo "The method {$this->method} is not defined in {$this->controller}";
            }

        }else{
            header($_SERVER['SERVER_PROTOCOL']. '404 Not Found');
            return view('errors/404');
        }
    }
}

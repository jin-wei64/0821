<?php

class App {
    
    public function __construct() {
        $url = $this->parseUrl();
        
        $controllerName = "{$url[0]}Controller";
        // $controllerName = "{$url[0]"."Controller";
        // echo $controllerName;
        if (!file_exists("controllers/$controllerName.php")) { 
            echo "$url[0]"." is not exist" ;
            return ;
        }
        require_once "controllers/$controllerName.php";
        $controller = new $controllerName;
        $methodName = isset($url[1]) ? $url[1] : 'index';
        if (!method_exists($controller, $methodName))
            return;
        unset($url[0]); 
        unset($url[1]);
        $params = $url ? array_values($url) : Array();
        call_user_func_array(Array($controller, $methodName), $params);
    }
    
    public function parseUrl() {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/"); //去掉最右邊的‘/’
            $url = explode("/", $url); //根據‘/’分解成一個陣列
            return $url;
        }
    }
    
}

?>
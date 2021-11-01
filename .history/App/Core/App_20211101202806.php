<?php

namespace App\Core;

class App
{
    public $controller = "Home";
    public $action = "Index";
    public $params = [];

    function __construct()
    {
        //process url
        $url = $this->urlProcess();
        $GLOBALS["admin"] = false;
        $GLOBALS["currentController"] = $url[0];
        $GLOBALS["currentAction"] = $url[1];


        if (strtolower($url[0]) == "admin") {
            $GLOBALS["admin"] = true;
            $GLOBALS["currentController"] = $url[1];

            unset($url[0]);
            // xu li controller
            if (file_exists(CONT . DS . "admin" . DS . ucfirst($url[1]) . "Controller.php")) {
                $this->controller = ucfirst($url[1]);
                unset($url[1]);
            }

            $this->controller = $this->controller . "Controller";

            require_once(CONT . DS . "admin" . DS . $this->controller . ".php");

            $this->controller = new $this->controller;

            //action
            if (isset($url[2]) && method_exists($this->controller, $url[2])) {
                $this->action = $url[2];
                unset($url[2]);
            }

            //param
            $this->params = $url ? array_values($url) : [];

            //call function in controller: controller-> action-> param
            call_user_func_array([$this->controller, $this->action], $this->params);
        } else {
            // var_dump($url);

            // xu li controller
            if (file_exists(CONT . DS . ucfirst($url[0]) . "Controller.php")) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }

            $this->controller = $this->controller . "Controller";

            require_once(CONT . DS . $this->controller . ".php");

            $this->controller = new $this->controller;

            //action
            if (isset($url[1]) && method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
                unset($url[1]);
            }

            //param
            $this->params = $url ? array_values($url) : [];

            //call function in controller: controller-> action-> param
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
    }



    private function urlProcess()
    {
        if (isset($_GET['url'])) {
            $url = explode('/', filter_var(trim($_GET['url'])));

            if ($url[0] == "admin") {
                if (!isset($url[1])) {
                    return [
                        "Admin",
                        "Home",
                        "index"
                    ];
                }
            }

            return $url;
        } else {
            return [
                "Home",
                "Index"
            ];
        }
    }
}

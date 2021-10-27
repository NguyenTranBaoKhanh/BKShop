<?php

namespace App\Core;

class Controller
{
    function model($model)
    {
        if (file_exists(MODEL . DS . $model . ".php")) {
            require_once(MODEL . DS . $model . ".php");
            return new $model;
        }
    }


    function view($view, $data = [])
    {
        if (file_exists(VIEW . DS . $view . ".php")) {
            //neu la admin thi qua layout cua admin
            //bien GLOBAL dc tao o ben App
            if ($GLOBALS["admin"]) {
                require_once(VIEW . DS . "admin/share/layout.php");
            } else {
                require_once(VIEW . DS . "share/layout.php");
            }
            return;
        } else {
            die("Not found view:" . $view);
        }
    }
}

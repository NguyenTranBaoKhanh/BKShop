<?php

use App\Core\Controller;

class HomeController extends Controller
{
    

    function __construct()
    {
       
    }

    function index()
    {
        $this->view("/admin/home/index");
    }

    

    
}

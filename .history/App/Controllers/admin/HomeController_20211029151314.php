<?php

use App\Core\Controller;

class HomeController extends Controller
{
    


    function __construct()
    {
       
    }

    function index()
    {
        echo "HELO ADMIN";
        $this->view("/admin/home/index");
    }

    
}

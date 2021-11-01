<?php

use App\Core\Controller;

class HomeController extends Controller
{
    

    function __construct()
    {
       
    }

    function index()
    {
        $this->homeModel->count();
        $this->view("/admin/home/index");
    }

    

    
}

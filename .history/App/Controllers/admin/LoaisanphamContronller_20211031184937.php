<?php

use App\Core\Controller;

class LoaisanphamController extends Controller
{
    

    function __construct()
    {
       
    }

    function index()
    {
        $this->view("/admin/loaisanpham/index");
    }

    

    
}

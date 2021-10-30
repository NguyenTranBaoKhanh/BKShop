<?php

use App\Core\Controller;

class AccountController extends Controller
{
    


    function __construct()
    {
       
    }

    function index()
    {
        $this->view("/admin/auth/login");
    }

    
}

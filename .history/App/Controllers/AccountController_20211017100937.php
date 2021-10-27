<?php

use App\Core\Controller;

class AccountController extends Controller
{
    public $userModel;


    function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    function index(){

      $this->view('/account/login');
    }

  }
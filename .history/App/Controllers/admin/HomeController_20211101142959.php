<?php

use App\Core\Controller;

class HomeController extends Controller
{
    public $homeModel;
    

    function __construct()
    {
        $this->homeModel = $this->model('HomeModel');
       
    }

    function index()
    {
        $data['count_sanpham']=$this->homeModel->count();
        $this->view("/admin/home/index", $data);
    }

    

    
}

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
        $data['count_order'] = $this->homeModel->countOrder();
        $data['count_brand'] = $this->homeModel->countbrand();
        $data['count_type'] = $this->homeModel->countType();
        $data['count_user'] = $this->homeModel->countType();

        $this->view("/admin/home/index", $data);
    }

    

    
}

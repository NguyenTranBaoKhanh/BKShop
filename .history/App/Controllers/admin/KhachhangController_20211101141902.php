<?php

use App\Core\Controller;

class LoaisanphamController extends Controller
{
    public $homeModel;


    function __construct()
    {
        $this->homeModel = $this->model('HomeModel');
    }

    function index()
    {

        $data['khachhang'] = $this->homeModel->getKhachhang();
        $this->view("/admin/khachhang/index", $data);
    }

    
}

<?php

use App\Core\Controller;

class KhachhangController extends Controller
{
    public $phukienModel;
    public $homeModel;
    public $userModel;

    function __construct()
    {
        $this->phukienModel = $this->model('PhukienModel');
        $this->homeModel = $this->model('HomeModel');
        $this->userModel = $this->model('UserModel');
    }

    function index()
    {
        

        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;



        $data['user']=$this->;

        $this->view("/khachhang/index", $data);
    }

    
}

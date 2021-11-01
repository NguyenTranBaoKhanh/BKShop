<?php

use App\Core\Controller;

class KhachhangController extends Controller
{
    public $phukienModel;
    public $homeModel;

    function __construct()
    {
        $this->phukienModel = $this->model('PhukienModel');
        $this->homeModel = $this->model('HomeModel');
    }

    function index()
    {
        

        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;

        $this->view("/phukien/index", $data);
    }

    
}

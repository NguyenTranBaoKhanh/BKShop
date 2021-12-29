<?php

use App\Core\Controller;

class ChinhsachController extends Controller
{
    public $homeModel;
    public $phukienModel;
    public $dienthoaiModel;

    function __construct()
    {
        $this->homeModel = $this->model('HomeModel');
        $this->phukienModel = $this->model('PhukienModel');
        $this->dienthoaiModel = $this->model('DienthoaiModel');
    }

    function index()
    {
        

        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;
        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;

        $this->view("/dienthoai/index", $data);
    }

    
}

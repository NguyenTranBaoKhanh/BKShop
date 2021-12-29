<?php

use App\Core\Controller;

class ChinhsachController extends Controller
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

  function chinhsachbaohanh()
  {
    //get brand
    $brand = $this->homeModel->getBrand();
    $data['brand'] = $brand;

    //get name accessory
    $nameAccessory = $this->phukienModel->getName();
    $data['nameAccessory'] = $nameAccessory;


    $this->view("/chinhsach/chinhsachbaohanh", $data);
  }

  
}

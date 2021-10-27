<?php

use App\Core\Controller;

class AccountController extends Controller
{
  public $userModel;
  public $smartphoneModel;
  public $phukienModel;


  function __construct()
  {
    $this->userModel = $this->model('UserModel');
    $this->smartphoneModel = $this->model('HomeModel');
    $this->phukienModel = $this->model('PhukienModel');
  }

  function index()
  {
    //get brand
    $brand = $this->smartphoneModel->getBrand();
    $data['brand'] = $brand;

    //get name accessory
    $nameAccessory = $this->phukienModel->getName();
    $data['nameAccessory'] = $nameAccessory;

    $this->view('/account/login', $data);
  }

  function register()
  {
    //get brand
    $brand = $this->smartphoneModel->getBrand();
    $data['brand'] = $brand;

    //get name accessory
    $nameAccessory = $this->phukienModel->getName();
    $data['nameAccessory'] = $nameAccessory;

    $this->view('/account/register',$data);
  }
}

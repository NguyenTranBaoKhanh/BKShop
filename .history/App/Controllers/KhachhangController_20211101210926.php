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



    $data['user'] = $this->userModel->getUserById($_SESSION['user']['id']);

    $this->view("/khachhang/index", $data);
  }

  function update($id)
  {
    $_POST['id'] = $id;

    $this->userModel->update($_POST);

    header("Location: " . DOCUMENT_ROOT . "/khachhang");
  }

  function donhang()
  {

    //get brand
    $brand = $this->homeModel->getBrand();
    $data['brand'] = $brand;

    //get name accessory
    $nameAccessory = $this->phukienModel->getName();
    $data['nameAccessory'] = $nameAccessory;

    $data['donhang'] = $this->userModel->getOrderByUser($_SESSION['user']['id']);

    $this->view("/khachhang/donhang", $data);
  }

  function chitietdonhang($id){
    //get brand
    $brand = $this->homeModel->getBrand();
    $data['brand'] = $brand;

    //get name accessory
    $nameAccessory = $this->phukienModel->getName();
    $data['nameAccessory'] = $nameAccessory;

    $data['chitietdonhang'] = $this->userModel->getDetailOrder($id);

    $this->view("/khachhang/chitietdonhang");
  }
}

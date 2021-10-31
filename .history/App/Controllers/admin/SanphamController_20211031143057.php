<?php

use App\Core\Controller;

class SanphamController extends Controller
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
    $data['sanpham'] = $this->homeModel->all();

    $this->view("/admin/sanpham/index", $data);
  }


  function create()
  {
    $this->view("/admin/sanpham/create");
  }

  function hang()
  {
    //get brand
    $brand = $this->homeModel->getBrand();
    $data['brand'] = $brand;

    //get name accessory
    $nameAccessory = $this->phukienModel->getName();
    $data['nameAccessory'] = $nameAccessory;

    if (isset($_GET['hang'])) {
      $ten = $_GET['hang'];
    } else {
      $ten = "";
    }
    //get id of brand
    $id = $this->homeModel->getIdOfBrand($ten);
    $data['id'] = $id['id'];

    //count item of brand
    $countItemOfBrand = $this->dienthoaiModel->countItemOfBrand($id['id']);
    $data['countItemOfBrand'] = $countItemOfBrand;
    //get num pages
    $amount = 15;
    $numPage = ceil($countItemOfBrand / $amount);
    $data['numPage'] = $numPage;

    if (isset($_GET['page'])) {
      $page = $_GET['page'];
    } else {
      $page = 1;
    }
    $data['page'] = $page;

    $limit = ($page - 1) * $amount;
    $itemOnPage = $this->dienthoaiModel->getItemOfTypeOfBrand($id['id'], $limit, $amount);
    $data['itemOnPage'] = $itemOnPage;
    $this->view("/dienthoai/hang", $data);
  }
}

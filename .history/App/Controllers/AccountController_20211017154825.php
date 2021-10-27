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


    $this->view('/account/register', $data);
  }



  function check_register()
  {
    //get brand
    $brand = $this->smartphoneModel->getBrand();
    $data['brand'] = $brand;

    //get name accessory
    $nameAccessory = $this->phukienModel->getName();
    $data['nameAccessory'] = $nameAccessory;

    if (isset($_POST)) {

      // $check = true;

      // $isUserName = $this->userModel->isUserName($_POST['taikhoan']);
      // if ($isUserName) {
      //     $data['error'][] = "Username already exists";
      //     $check = false;
      // }

      // if (!$check) {
      //     $this->view("/account/register", $data);
      //     return;
      // }


      $result = $this->userModel->register($_POST);
      if ($result == true) {
        $data['message'][] = "Register successful. Please login!!";
        $this->view('/account/login', $data);
      } else {
        $data['error'][] = "Register unsuccessful!";
        $this->view("/account/register", $data);
      }
    }
  }

  function check_login($_POST)
  {


    if (isset($_POST)) {
      


      $result = $this->userModel->checkLogin($_POST);
      if ($result === true) {

        $user = $this->userModel->getEmail($_POST['email']);

        $_SESSION['user'] = $user;

        header("Location: " . DOCUMENT_ROOT);
        return;
      } else {
        $data['error'][] = $result;
      }
    } else {

      $data['error'][] = "Email and password can't be empty!";
    }

    $this->view("/account/login", $data);
  }
}

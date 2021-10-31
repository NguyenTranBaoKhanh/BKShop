<?php

use App\Core\Controller;

class AccountController extends Controller
{

  public $userModel;


  function __construct()
  {
    $this->userModel = $this->model('UserModel');
  }

  function index()
  {
    $this->view("/admin/auth/login");
  }

  function check_login()
  {
    $result = $this->userModel->check_login_Admin($_POST);
    if ($result[0] === true) {
      $_SESSION["admin"] = $result[1];
      header("Location: " . DOCUMENT_ROOT . "/admin");
    } else {
      print_r($result);
      $this->view("/admin/auth/login", []);
    }
  }

  function logout()
  {
    session_destroy();
    header("Location: " . DOCUMENT_ROOT . "/admin");
  }
}

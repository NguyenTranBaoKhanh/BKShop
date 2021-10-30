<?php

use App\Core\Controller;

class AccountController extends Controller
{



  function __construct()
  {
  }

  function index()
  {
    $this->view("/admin/auth/login");
  }

  function check_login($_POSt)
  {
    $result = $this->userModel->check_login($_POST);
    if ($result[0] === true) {
      $_SESSION["admin"] = $result[1];
      header("Location: " . DOCUMENT_ROOT . "/admin");
    } else {
      print_r($result);
      $this->view("auth/login", []);
    }
  }
}

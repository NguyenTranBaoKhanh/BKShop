<?php

use App\Core\Controller;

class BinhluanController extends Controller
{
  public $homeModel;

  function __construct()
  {
    $this->homeModel = $this->model('HomeModel');
  }

  function index()
  {
    $data['binhluan'] = $this->homeModel->getAllComment();

    $this->view("/admin/binhluan/index", $data);
  }
  function delete($id)
  {
    $result = $this->homeModel->delete($id);
    if ($result) {
      $_SESSION['alert']['success'] = true;
      $_SESSION['alert']['messages'] = "Đã xóa!";
    } else {
      $_SESSION['alert']['success'] = false;
      $_SESSION['alert']['messages'] = "Không xóa được!";
    }

    if ($result) {
      header("Location: " . DOCUMENT_ROOT . "/admin/binhluan");
    } else {
      if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
      }
    }
  }
}

<?php

use App\Core\Controller;

class SanphamController extends Controller
{
  public $homeModel;

  function __construct()
  {
    $this->homeModel = $this->model('HomeModel');
  }

  function index()
  {
    $data['sanpham'] = $this->homeModel->all();

    $this->view("/admin/sanpham/index", $data);
  }


  function create()
  {
    $data['loai'] = $this->homeModel->getType();
    $data['hang'] = $this->homeModel->getBrand();


    $this->view("/admin/sanpham/create", $data);
  }

  function store()
  {
    if (!isset($_POST)) {
      header("Location: " . DOCUMENT_ROOT . "/admin");
    }

    // $data = $_POST;

    $data['name'] = $_POST["name"];
    $data['category'] = $_POST["category"];
    $data['size'] = $_POST["size"];
    $data['price'] = $_POST["price"];
    $data['description'] = $_POST["description"];
    $data['hinh'] = '';

    //handel image
    $outputDir = PUBLIC_DIR_CAKE_IMG;

    if (isset($_FILES['hinh']) != "") {
      if ($_FILES['hinh']['name']) {
        $random = time();
        $imgName = str_replace(' ', '-', strtolower($_FILES['hinh']['name']));
        $imgExt = substr($imgName, strrpos($imgName, '.'));
        $imgExt = str_replace('.', '', $imgExt);
        $newImg = $random . '.' . $imgExt;

        move_uploaded_file($_FILES['hinh']['tmp_name'], $outputDir . DS . $newImg);
        $_POST['hinh'] = $newImg;
      }
    }
    $result = $this->homeModel->store($_POST);

    if ($result) {
      $_SESSION['alert']['success'] = true;
      $_SESSION['alert']['messages'] = "Thêm thành công!";
    } else {
      $_SESSION['alert']['success'] = false;
      $_SESSION['alert']['messages'] = "Thêm thất bại!";
    }

    if ($result) {
      header("Location: " . DOCUMENT_ROOT . "/admin/sanpham");
    } else {
      if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
      }
    }
  }

  function edit($id)
  {
    $item = $this->homeModel->getById($id);
    $data['item'] = $item;

    $data['loai'] = $this->homeModel->getType();
    $data['hang'] = $this->homeModel->getBrand();

    if (!$item) {
      header("Location: " . DOCUMENT_ROOT . "/admin/sanpham");
    }

    $this->view("/admin/sanpham/edit", $data);
  }

  function update($id)
  {
    if (!isset($_POST)) {
      header("Location: " . DOCUMENT_ROOT . "/admin");
    }

    // $data = $_POST;

    $_POST['id'] = $id;

    //handel image
    $outputDir = PUBLIC_DIR_CAKE_IMG;

    if (isset($_FILES['hinh'])) {
      if ($_FILES['hinh']['name']) {
        $random = time();
        $imgName = str_replace(' ', '-', strtolower($_FILES['hinh']['name']));
        $imgExt = substr($imgName, strrpos($imgName, '.'));
        $imgExt = str_replace('.', '', $imgExt);
        $newImg = $random . '.' . $imgExt;

        move_uploaded_file($_FILES['hinh']['tmp_name'], $outputDir . DS . $newImg);
        $_POST['hinh'] = $newImg;
      }
    }

    // var_dump($data);
    $result = $this->homeModel->update($_POST);
    
    if ($result) {
      $_SESSION['alert']['success'] = true;
      $_SESSION['alert']['messages'] = "Cập nhật thành công!";
    } else {
      $_SESSION['alert']['success'] = false;
      $_SESSION['alert']['messages'] = "Cập nhật thất bại!";
    }

    if ($result) {
      header("Location: " . DOCUMENT_ROOT . "/admin/sanpham");
    } else {
      if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
      }
    }
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
      header("Location: " . DOCUMENT_ROOT . "/admin/sanpham");
    } else {
      if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
      }
    }
  }
}

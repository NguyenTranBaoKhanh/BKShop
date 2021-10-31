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
    $data['loai']=$this->homeModel->getType();
    $data['hang']=$this->homeModel->getBrand();


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
        $data['cake'] = $item;

        $categories = $this->categoryModel->all();
        $data['categories'] = $categories;

        if (!$item) {
            header("Location: " . DOCUMENT_ROOT . "/admin/cakes");
        }

        $this->view("/admin/cakes/edit", $data);
    }
}

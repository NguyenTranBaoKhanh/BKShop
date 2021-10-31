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
        $data['cakeimage'] = '';

        //handel image
        $outputDir = PUBLIC_DIR_CAKE_IMG;

        if (isset($_FILES['cakeimage']) != "") {
            if ($_FILES['cakeimage']['name']) {
                $random = time();
                $imgName = str_replace(' ', '-', strtolower($_FILES['cakeimage']['name']));
                $imgExt = substr($imgName, strrpos($imgName, '.'));
                $imgExt = str_replace('.', '', $imgExt);
                $newImg = $random . '.' . $imgExt;

                move_uploaded_file($_FILES['cakeimage']['tmp_name'], $outputDir . DS . $newImg);
                $data['cakeimage'] = $newImg;
            }
        }
        $result = $this->cakeModel->store($data);
        if ($result) {
            header("Location: " . DOCUMENT_ROOT . "/admin/cakes");
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }
}

<?php

use App\Core\Controller;

class HangController extends Controller
{
    public $homeModel;


    function __construct()
    {
        $this->homeModel = $this->model('HomeModel');
    }

    function index()
    {

        $data['hang'] = $this->homeModel->getBrand();
        $this->view("/admin/hang/index", $data);
    }

    function create()
    {

        $this->view("/admin/hang/create");
    }

    //check_create
    function store()
    {
        if (!isset($_POST)) {
            header("Location: " . DOCUMENT_ROOT . "/admin");
        }
        $result = $this->homeModel->themHang($_POST);
        if ($result) {
            $_SESSION['alert']['success'] = true;
            $_SESSION['alert']['messages'] = "Thêm thành công!";
        } else {
            $_SESSION['alert']['success'] = false;
            $_SESSION['alert']['messages'] = "Thêm thất bại!";
        }
        if ($result) {
            header("Location: " . DOCUMENT_ROOT . "/admin/hang");
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }

    function edit($id)
    {
        $data['hang'] = $this->homeModel->getByBrand($id);

        $this->view("/admin/hang/edit", $data);
    }

    //check_edit
    function update($id)
    {
        if (!isset($_POST)) {
            header("Location: " . DOCUMENT_ROOT . "/admin");
        }

        $_POST['id'] = $id;
        $result = $this->homeModel->suaHang($_POST);
        if ($result) {
            $_SESSION['alert']['success'] = true;
            $_SESSION['alert']['messages'] = "Cập nhật thành công!";
        } else {
            $_SESSION['alert']['success'] = false;
            $_SESSION['alert']['messages'] = "Cập nhật thất bại!";
        }
        if ($result) {
            header("Location: " . DOCUMENT_ROOT . "/admin/hang");
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }
}

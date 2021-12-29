<?php

use App\Core\Controller;

class DonhangController extends Controller
{
    public $homeModel;


    function __construct()
    {
        $this->homeModel = $this->model('HomeModel');
    }

    function index()
    {

        $data['donhang'] = $this->homeModel->getOrder();
        $this->view("/admin/donhang/index", $data);
    }

    function create()
    {

        $this->view("/admin/loaisanpham/create");
    }

    //check_create
    function store()
    {
        if (!isset($_POST)) {
            header("Location: " . DOCUMENT_ROOT . "/admin");
        }
        $result = $this->homeModel->themLoai($_POST);
        if ($result) {
            header("Location: " . DOCUMENT_ROOT . "/admin/loaisanpham");
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }

    function edit($id)
    {
        $data['loai'] = $this->homeModel->getTypeById($id);

        $this->view("/admin/loaisanpham/edit", $data);
    }

    //check_edit
    function update($id)
    {
        if (!isset($_POST)) {
            header("Location: " . DOCUMENT_ROOT . "/admin");
        }

        $_POST['id'] = $id;
        $result = $this->homeModel->suaLoai($_POST);
        if ($result) {
            header("Location: " . DOCUMENT_ROOT . "/admin/loaisanpham");
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }

    function changestatus()
    {
        if (isset($_GET)) {
            $result = $this->homeModel->changeStatus($_GET);
            // echo json_encode($result);
            return;
        } else echo "can not change amount";
    }

    function chitietdonhang($id)
    {

        $data['chitietdonhang'] = $this->homeModel->getOrderDetail($id);
        $this->view("/admin/donhang/detail", $data);
    }

    function changesDate()
    {
        if (isset($_GET)) {
            $result = $this->homeModel->changeStatus($_GET);
            // echo json_encode($result);
            return;
        } else echo "can not change amount";
    }
}

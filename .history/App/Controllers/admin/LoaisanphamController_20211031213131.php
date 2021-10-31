<?php

use App\Core\Controller;

class LoaisanphamController extends Controller
{
    public $homeModel;


    function __construct()
    {
        $this->homeModel = $this->model('HomeModel');
    }

    function index()
    {

        $data['loai'] = $this->homeModel->getType();
        $this->view("/admin/loaisanpham/index", $data);
    }

    function create()
    {

        $this->view("/admin/loaisanpham/create");
    }

    function store()
    {
        if (!isset($_POST)) {
            header("Location: " . DOCUMENT_ROOT . "/admin");
        }
        $result = $this->homeModel->themLoai($_POST);


    }
}

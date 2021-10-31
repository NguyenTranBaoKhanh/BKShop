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
        $this->view("/admin/hang/index", $data);
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

    function edit($id){
        $data['loai']=$this->homeModel->getTypeById($id);

        $this->view("/admin/loaisanpham/edit", $data);
    }

    //check_edit
    function update($id){
        if (!isset($_POST)) {
            header("Location: " . DOCUMENT_ROOT . "/admin");
        }

        $_POST['id']=$id;
        $result = $this->homeModel->suaLoai($_POST);
        if ($result) {
            header("Location: " . DOCUMENT_ROOT . "/admin/loaisanpham");
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }
}

<?php

use App\Core\Controller;

class ChinhsachController extends Controller
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

        $this->view("/dienthoai/index", $data);
    }

    
}

<?php

use App\Core\Controller;

class DienthoaiController extends Controller
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
        //get all smartphone
        $smartphones = $this->dienthoaiModel->all();
        if (!$smartphones) {
            $smartphones = [];
        }
        $data['smartphone'] = $smartphones;

        //get num of smartphone
        $count = $this->dienthoaiModel->count();
        $data['count'] = $count;

        //get num page
        $amount = 15;
        $numPage = ceil($count / $amount);
        $data['numPage'] = $numPage;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $data['page'] = $page;

        //get smartphone of page
        $limit = ($page - 1) * 15;
        $itemOnPage = $this->dienthoaiModel->getItem($limit, $amount);
        $data['itemOnPage'] = $itemOnPage;

        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;
        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;

        $this->view("admin//dienthoai/index", $data);
    }

    function hang()
    {
        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;

        if (isset($_GET['hang'])) {
            $ten = $_GET['hang'];
        } else {
            $ten = "";
        }
        //get id of brand
        $id = $this->homeModel->getIdOfBrand($ten);
        $data['id'] = $id['id'];

        //count item of brand
        $countItemOfBrand = $this->dienthoaiModel->countItemOfBrand($id['id']);
        $data['countItemOfBrand'] = $countItemOfBrand;
        //get num pages
        $amount = 15;
        $numPage = ceil($countItemOfBrand / $amount);
        $data['numPage'] = $numPage;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $data['page'] = $page;

        $limit = ($page - 1) * $amount;
        $itemOnPage = $this->dienthoaiModel->getItemOfTypeOfBrand($id['id'], $limit, $amount);
        $data['itemOnPage'] = $itemOnPage;
        $this->view("/dienthoai/hang", $data);
    }
}

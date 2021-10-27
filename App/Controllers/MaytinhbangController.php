<?php

use App\Core\Controller;

class MaytinhbangController extends Controller
{
    public $phukienModel;
    public $maytinhbangModel;
    public $homeModel;

    function __construct()
    {
        $this->homeModel = $this->model('HomeModel');
        $this->phukienModel = $this->model('PhukienModel');
        $this->maytinhbangModel = $this->model('MaytinhbangModel');
    }

    function index()
    {
        //get all smartphone
        $smartphones = $this->maytinhbangModel->all();
        if (!$smartphones) {
            $smartphones = [];
        }
        $data['smartphone'] = $smartphones;

        //get num of smartphone
        $count = $this->maytinhbangModel->count();
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
        $itemOnPage = $this->maytinhbangModel->getItem($limit, $amount);
        $data['itemOnPage'] = $itemOnPage;

        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory']=$nameAccessory;

        $this->view("/maytinhbang/index", $data);
    }

    function hang()
    {   
        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory']=$nameAccessory;

        if (isset($_GET['hang'])) {
            $ten = $_GET['hang'];
        } else {
            $ten = "";
        }
        //get id of brand
        $id = $this->homeModel->getIdOfBrand($ten);
        $data['id'] = $id['id'];

        //count item of brand
        $countItemOfBrand = $this->maytinhbangModel->countItemOfBrand($id['id']);
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
        $itemOnPage=$this->maytinhbangModel->getItemOfTypeOfBrand($id['id'], $limit, $amount);
        $data['itemOnPage']=$itemOnPage;
        $this->view("/maytinhbang/hang", $data);
    }
}

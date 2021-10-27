<?php

use App\Core\Controller;

class PhukienController extends Controller
{
    public $phukienModel;
    public $homeModel;

    function __construct()
    {
        $this->phukienModel = $this->model('PhukienModel');
        $this->homeModel = $this->model('HomeModel');
    }

    function index()
    {
        //get all accessory
        $smartphones = $this->phukienModel->all();
        if (!$smartphones) {
            $smartphones = [];
        }
        $data['smartphone'] = $smartphones;

        //get num of accessory
        $count = $this->phukienModel->count();
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
        $itemOnPage = $this->phukienModel->getItem($limit, $amount);
        $data['itemOnPage'] = $itemOnPage;

        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;

        $this->view("/phukien/index", $data);
    }

    function loai()
    {
        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;

        if (isset($_GET['loai'])) {
            $loai = $_GET['loai'];
        } else {
            $loai = "";
        }
        //get id of brand
        $name = $this->phukienModel->getNameOfId($loai);
        $data['name'] = $name['ten_loai'];

        //get item of type
        $item = $this->phukienModel->getById($loai);
        $data['item'] = $item;



        $this->view("/phukien/loai", $data);
    }
}

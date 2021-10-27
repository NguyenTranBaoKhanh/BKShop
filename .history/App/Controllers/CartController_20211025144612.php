<?php

use App\Core\Controller;

class CartController extends Controller
{
    public $cartModel;
    public $homeModel;
    public $phukienModel;

    function __construct()
    {
        $this->cartModel = $this->model('CartModel');
        $this->homeModel = $this->model('HomeModel');
        $this->phukienModel = $this->model('PhukienModel');
    }

    function index()
    {
        //get brand
        $brand = $this->homeModel->getBrand();
        $data['brand'] = $brand;
        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;

        if (isset($_SESSION['user'])) {
            $item = $this->cartModel->getItemInCart($_SESSION['user']['id']);
        }
        $data['item'] = $item;



        $this->view('/cart/index', $data);
    }

    function addtocart()
    {
        if (isset($_GET)) {
            $result = $this->cartModel->addToCart($_GET);
            echo json_encode($result);
            return;
        } else echo "can not add to card";
    }

    function amountInCart()
    {
        if (isset($_SESSION['user'])) {
            $result = $this->cartModel->getAmount($_SESSION['user']['id']);
            echo $result;
        } else echo 0;
    }

    function removecart($id_khachhang, $id_hanghoa)
    {
        var_dump($id_khachhang);
        die();
        $result = $this->cartModel->deleteToCart($id_khachhang, $id_hanghoa);
        $this->view('/cart/index');
    }

    function changeamount()
    {
        if (isset($_GET)) {
            $result = $this->cartModel->changeAmount($_GET);
            echo json_encode($result);
            return;
        } else echo "can not change amount";
    }
}

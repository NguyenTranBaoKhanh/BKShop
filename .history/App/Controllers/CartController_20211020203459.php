<?php

use App\Core\Controller;

class CartController extends Controller
{
    public $cartModel;

    function __construct()
    {
        $this->cartModel = $this->model('CartModel');
    }

    function index(){


        $this->view('/cart/index');
    }

    function addtocart()
    {
        if (isset($_GET)) {
            $result = $this->cartModel->addToCart($_GET);
            echo json_encode($result);
            return;
        }else echo "can not add to card";
    }

    function amountInCart(){
        if(isset($_SESSION['user'])){
            $result=$this->cartModel->getAmount($_SESSION['user']['id']);
            echo $result;
        }else echo 0;
    }

    function removecart()
    {
    }
}

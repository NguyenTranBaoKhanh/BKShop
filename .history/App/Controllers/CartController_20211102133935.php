<?php

use App\Core\Controller;

class CartController extends Controller
{
    public $cartModel;
    public $homeModel;
    public $phukienModel;
    public $userModel;

    function __construct()
    {
        $this->cartModel = $this->model('CartModel');
        $this->homeModel = $this->model('HomeModel');
        $this->phukienModel = $this->model('PhukienModel');
        $this->userModel = $this->model('UserModel');
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

        $result = $this->cartModel->deleteToCart($id_khachhang, $id_hanghoa);
        // header("Location: " . DOCUMENT_ROOT . "/cart");
        echo $result;
    }

    function changeamount()
    {
        if (isset($_GET)) {
            $result = $this->cartModel->changeAmount($_GET);
            echo json_encode($result);
            return;
        } else echo "can not change amount";
    }

    function pay($id_khachhang)
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

        $data['user'] = $this->userModel->getUserById($id_khachhang);

        $data['item'] = $item;
        $this->view("/cart/pay", $data);
    }

    function check_pay()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngaydat = date("d-m-Y G:i:s");
        var_dump($ngaydat);

        if (isset($_POST)) {
            // var_dump($_POST);
            $result = $this->cartModel->order($_POST);
            
            if ($result > 0) {
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Đặt hàng thành công!";
            } else {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = "Đặt hàng thất bại!";
            }
            if (isset($_SESSION['user'])) {
                $result2 = $this->cartModel->getItemInCart($_SESSION['user']['id']);
            }
            foreach ($result2 as $index => $item) {
                $check = $this->cartModel->orderDetail($result['id_donhang'], $item['id'], $item['ten'], $item['soluong'], $item['gia'] * 0.95 * $item['soluong']);
                var_dump($check);
            }
            $result3 = $this->cartModel->deleteCart($_SESSION['user']['id']);
            header("Location: " . DOCUMENT_ROOT . "/cart");
        }
    }
}

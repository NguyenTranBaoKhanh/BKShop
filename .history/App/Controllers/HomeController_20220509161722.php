<?php

use App\Core\Controller;

class HomeController extends Controller
{
    public $smartphoneModel;
    public $phukienModel;


    function __construct()
    {
        $this->smartphoneModel = $this->model('HomeModel');
        $this->phukienModel = $this->model('PhukienModel');
    }

    function index()
    {
        //get all smartphone
        $smartphones = $this->smartphoneModel->all();
        if (!$smartphones) {
            $smartphones = [];
        }
        $data['smartphone'] = $smartphones;
        $data['pupular'][] = $smartphones[1];
        $data['pupular'][] = $smartphones[5];
        $data['pupular'][] = $smartphones[10];
        $data['pupular'][] = $smartphones[15];
        $data['pupular'][] = $smartphones[20];
        $data['pupular'][] = $smartphones[25];
        $data['pupular'][] = $smartphones[30];
        $data['pupular'][] = $smartphones[35];
        $data['pupular'][] = $smartphones[40];
        $data['pupular'][] = $smartphones[45];
        $data['pupular'][] = $smartphones[50];

        $phukien = $this->phukienModel->all();
        $data['phukien'] = $phukien;


        //get num of smartphone
        $count = $this->smartphoneModel->count();
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
        $limit = ($page - 1) * $amount;
        $itemOnPage = $this->smartphoneModel->getItem($limit, $amount);
        $data['itemOnPage'] = $itemOnPage;
        foreach($data['itemOnPage']  as $it => $item){
            $result=$this->smartphoneModel->getAvgstar($item['id']);
            if($result!=0){
                $data[$item['id']]['avg']=$result;
            }else{
                $data[$item['id']]['avg']=0;
            }
        }

        //get brand
        $brand = $this->smartphoneModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;

        $this->view("/home/index", $data);
    }

    function search()
    {   //get brand
        $brand = $this->smartphoneModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;

        if (isset($_GET["search"])) {
            $keyword = $_GET["search"];
        } else {
            $keyword = "";
        }
        $item = $this->smartphoneModel->getByKeyword($keyword);
        $data['search'] = $keyword;
        $data['item'] = $item;
        $this->view("/home/search", $data);
    }

    function detail($id, $mau)
    {   //get brand
        $brand = $this->smartphoneModel->getBrand();
        $data['brand'] = $brand;

        //get name accessory
        $nameAccessory = $this->phukienModel->getName();
        $data['nameAccessory'] = $nameAccessory;



        $data['id_url'] = $id;
        $data['mau_url'] = $mau;
        $item = $this->smartphoneModel->getById($id);
        $data['item'] = $item;

        $hang = $item['id_hang'];
        $data['hang'] = $this->smartphoneModel->getByBrand($hang);

        $ma_sp = $item['ma_sp'];
        $data['ma_sp'] = $this->smartphoneModel->get_ma_sp_and_mau($ma_sp, $mau);
        $data['mau'] = $this->smartphoneModel->get_ma_sp($ma_sp);

        $data['tuong_tu'] = $this->smartphoneModel->get_sp_tuong_tu($ma_sp);

        $data['comment'] = $this->smartphoneModel->getComment($id);

        $data['avg_star']=$this->smartphoneModel->getAvgstar($id);

        $data['count_comment']= $this->smartphoneModel->countComment($id);

        $this->view("/home/detail", $data);
    }

    function comment($id, $mau){
        $id_user=$_SESSION["user"]["id"];
        var_dump($id, $mau);
        $result = $this->smartphoneModel->addComment($id, $id_user, $_POST);

        // $this->detail($id, $mau);
        header("Location: " . DOCUMENT_ROOT."/home/detail/".$id."/".$mau."#comment");
        // if($result){
        //     // echo "thanh cong";
        // }
        // else{
        //     echo "that bai";
        // }
        
    }
}

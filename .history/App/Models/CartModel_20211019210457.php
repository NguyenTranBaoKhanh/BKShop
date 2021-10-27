<?php

use App\Core\Database;


//đã require trong index rồi
class CartModel extends Database
{


    //thêm cake dô cart
    function addToCart($data)
    {
        $id_hanghoa = $data['cakeId'];
        $id_khachhang = $data['userId'];
        $soluong = isset($data['amount']) ? $data['amount'] : 1;

        //kiểm tra có hanghoa trong cart chưa
        $check = $this->checkCakeInCart($id_khachhang, $id_hanghoa);
        $isSuccess = true;
        if ($check > 0) {
            //nếu có amount thì cộng thêm amount add vào
            $check =  $check + $soluong;

            

            $sql = $this->conn->prepare("update cart set amount=? where id_user=? and id_cake=?");
            $sql->bind_param("iii", $check, $userId, $cakeId);
            $sql->execute();

            // $result = $sql->get_result();

            if ($sql->error) {
                $isSuccess = false;
            }
        } else {
            $sql = $this->conn->prepare("insert into cart(id_cake, id_user, amount) values(?, ?, ?)");
            $sql->bind_param("iii", $cakeId, $userId, $amount);
            $sql->execute();

            if ($sql->error) {
                $isSuccess = false;
            }
        }


        $amount = $this->getAmount($userId);
        return [
            "isSuccess" => $isSuccess,
            "amount" => $amount
        ];
    }
    //addtocart


    //trả về giá trị amount của cake có trong cart
    function checkCakeInCart($id_khachhang, $id_hanghoa)
    {

        $sql = $this->conn->prepare("select * from giohang where id_khachhang=? and id_hanghoa=?");
        $sql->bind_param("ii", $id_khachhang, $id_hanghoa);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc()['so_luong'];
        }

        return 0;
    }
    //checkCakeInCart


    //lấy tổng amount có trong cart 
    function getAmount($userId)
    {
        $sql = $this->conn->prepare("select sum(amount) from cart where id_user=?");
        $sql->bind_param("i", $userId);
        $sql->execute();

        $result = $sql->get_result();

        return $result->fetch_row()[0];
    }
    //getAmount

    //xóa cake khỏi card
    function deleteCart($userId, $cakeId)
    {
        $sql = $this->conn->prepare("delete from cart where id_user=? and id_cake=?");
        $sql->bind_param("ii", $userId, $cakeId);
        $sql->execute();

        if ($sql->affected_rows > 0) {
            return true;
        }
        return false;
    }

    function store($data){

    }

    function delete($data){

    }

    function update($data){
        
    }
}

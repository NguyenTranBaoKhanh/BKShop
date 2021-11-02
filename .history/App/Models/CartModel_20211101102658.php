<?php

use App\Core\Database;


//đã require trong index rồi
class CartModel extends Database
{

    //thêm cake dô cart
    function addToCart($data)
    {
        $id_hanghoa = $data['id_hanghoa'];
        $id_khachhang = $data['id_khachhang'];
        $soluong = isset($data['so_luong']) ? $data['so_luong'] : 1;

        //kiểm tra có hanghoa trong cart chưa
        $check = $this->checkInCart($id_khachhang, $id_hanghoa);
        $isSuccess = true;
        if ($check > 0) {
            //nếu có amount thì cộng thêm amount add vào
            $check =  $check + $soluong;

            $sql = $this->conn->prepare("update giohang set so_luong=? where id_khachhang=? and id_hanghoa=?");
            $sql->bind_param("iii", $check, $id_khachhang, $id_hanghoa);
            $sql->execute();

            // $result = $sql->get_result();

            if ($sql->error) {
                $isSuccess = false;
            }
        } else {
            $sql = $this->conn->prepare("insert into giohang(id_khachhang, id_hanghoa, so_luong) values(?, ?, ?)");
            $sql->bind_param("iii", $id_khachhang, $id_hanghoa, $soluong);
            $sql->execute();

            if ($sql->error) {
                $isSuccess = false;
            }
        }


        $amount = $this->getAmount($id_khachhang);
        return [
            "isSuccess" => $isSuccess,
            "amount" => $amount
        ];
    }
    //addtocart


    //trả về giá trị amount của cake có trong cart
    function checkInCart($id_khachhang, $id_hanghoa)
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
    function getAmount($id_khachhang)
    {
        $sql = $this->conn->prepare("select sum(so_luong) from giohang where id_khachhang=?");
        $sql->bind_param("i", $id_khachhang);
        $sql->execute();

        $result = $sql->get_result();

        return $result->fetch_row()[0];
    }
    //getAmount


    function getItemInCart($id_khachhang)
    {
        $sql = $this->conn->prepare("call getItemInCart(?)");
        $sql->bind_param("i", $id_khachhang);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }



    //xóa item khỏi cart
    function deleteToCart($id_khachhang, $id_hanghoa)
    {
        $sql = $this->conn->prepare("delete from giohang where id_khachhang=? and id_hanghoa=?");
        $sql->bind_param("ii", $id_khachhang, $id_hanghoa);
        $sql->execute();

        if ($sql->affected_rows > 0) {
            return true;
        }
        return false;
    }

    function getAmountItem($id_khachhang, $id_hanghoa)
    {
        $sql = $this->conn->prepare("select so_luong from giohang where id_khachhang=? and id_hanghoa=?");
        $sql->bind_param("ii", $id_khachhang, $id_hanghoa);
        $sql->execute();

        $result = $sql->get_result();

        return $result->fetch_row()[0];
    }

    function changeAmount($data)
    {
        $id_hanghoa = $data['id_hanghoa'];
        $id_khachhang = $data['id_khachhang'];
        $so_luong = $data['so_luong'];

        $isSuccess = true;

        $sql = $this->conn->prepare("update giohang set so_luong=? where id_khachhang=? and id_hanghoa=?");
        $sql->bind_param("iii", $so_luong, $id_khachhang, $id_hanghoa);
        $sql->execute();

        $result = $sql->get_result();

        if ($sql->error) {
            $isSuccess = false;
        }


        $amount = $this->getAmountItem($id_khachhang, $id_hanghoa);
        return [
            "isSuccess" => $isSuccess,
            "amount" => $amount
        ];
        // if ($sql->affected_rows > 0) {
        //     return true;
        // }
        // return false;

    }

    function order($data)
    {
        if (isset($data)) {
            $id = $data['id'];
            $hoten=$data['hoten'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ngaydat = date("d-m-Y G:i:s");
            $ngaygiao = date("d-m-Y", strtotime("+7 day"));
            $gia = $data['total'];
            $trangthai = "Chưa xử lý";
            $diachi = $data['diachi'];
            $sdt = $data['sdt'];

            $sql = $this->conn->prepare("CALL sp_book(?, ?, ?, ?, ?, ?, ?, ?)");
            $sql->bind_param("isssisss", $id, $hoten, $ngaydat, $ngaygiao, $gia, $trangthai, $diachi, $sdt);
            $sql->execute();
            $result = $sql->get_result();

            if ($result->num_rows > 0) {
                return $result->fetch_assoc();
            } else {
                return false;
            }
        }
        return false;
    }

    function orderDetail($id_donhang, $id_hanghoa, $ten_hang_hoa, $so_luong, $gia)
    {
        $sql = $this->conn->prepare("insert into chitietdonhang(id_donhang, id_hanghoa, ten_hang_hoa, so_luong, gia) value(?, ?, ?, ?, ?)");
        $sql->bind_param("iisii", $id_donhang, $id_hanghoa, $ten_hang_hoa, $so_luong, $gia);
        $sql->execute();

        $result = $sql->affected_rows;

        var_dump($sql);
        if ($result < 1) {
            return false;
        } else {
            return true;
        }
    }

    function deleteCart($id_khachhang)
    {
        $sql = $this->conn->prepare("delete from giohang where id_khachhang=?");
        $sql->bind_param("i", $id_khachhang);
        $sql->execute();
        $result = $sql->affected_rows;

        if ($result>0) {
            return true;
        } else {
            return false;
        }

    }



    function store($data)
    {
    }

    function delete($data)
    {
    }

    function update($data)
    {
    }
}
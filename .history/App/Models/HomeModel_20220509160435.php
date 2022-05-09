<?php

use App\Core\Database;

class HomeModel extends Database
{
    function all()
    {

        // $sql = 'SELECT * FROM Cakes';
        // $result = $this->conn->query($sql);

        $sql = $this->conn->prepare("SELECT * FROM hanghoa");
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function getById($id)
    {
        $sql = $this->conn->prepare("SELECT * FROM hanghoa where id=? ");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    function getByKeyWord($keyword)
    {
        $keyword = '%' . $keyword . '%';
        $sql = $this->conn->prepare("SELECT * FROM hanghoa WHERE ten like ?");
        $sql->bind_param("s", $keyword);

        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function count()
    {
        $sql = 'select id from hanghoa';
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }

    function getItem($limit, $num)
    {
        $sql = $this->conn->prepare("select * from hanghoa limit ?, ?");
        $sql->bind_param("ii", $limit, $num);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function getItemOfType($id, $limit, $num)
    {
        $sql = $this->conn->prepare("select * from hanghoa where id_loai=? limit ?, ?");
        $sql->bind_param("iii", $id, $limit, $num);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }


    function getBrand()
    {
        $sql = $this->conn->prepare("select * from hang");
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    function getItemOfBrand($id, $limit, $num)
    {
        $sql = $this->conn->prepare("select * from hanghoa where id_hang=? limit ?, ?");
        $sql->bind_param("iii", $id, $limit, $num);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function countItemOfType($id_loai)
    {
        $sql = $this->conn->prepare("select * from hanghoa where id_loai=?");
        $sql->bind_param("i", $id_loai);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }

    function countItemOfBrand($id_hang)
    {
        $sql = $this->conn->prepare("select * from hanghoa where id_hang=?");
        $sql->bind_param("i", $id_hang);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }

    function getIdOfBrand($ten_hang)
    {
        $sql = $this->conn->prepare("select id from hang where ten_hang=? ");
        $sql->bind_param("s", $ten_hang);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    function getByBrand($brand)
    {
        $sql = $this->conn->prepare("SELECT * FROM hang where id=? ");
        $sql->bind_param("i", $brand);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    function get_ma_sp_and_mau($ma_sp, $mau)
    {
        $sql = $this->conn->prepare("select * from hanghoa where ma_sp=? and mau=?");
        $sql->bind_param("ss", $ma_sp, $mau);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function get_ma_sp($ma_sp)
    {
        $sql = $this->conn->prepare("select DISTINCT mau from hanghoa where ma_sp=?");
        $sql->bind_param("s", $ma_sp);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function get_sp_tuong_tu($ma_sp)
    {
        $sql = $this->conn->prepare("select * from hanghoa where ma_sp=?");
        $sql->bind_param("s", $ma_sp);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }


    // admin

    function countOrder()
    {
        $sql = 'select id from donhang';
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }
    function countBrand()
    {
        $sql = 'select id from hang';
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }
    function countType()
    {
        $sql = 'select id from loaihang';
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }
    function countUser()
    {
        $sql = 'select id from khachhang';
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }

    function getType()
    {
        $sql = $this->conn->prepare("select * from loaihang");
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function getTypeById($id)
    {
        $sql = $this->conn->prepare("SELECT * FROM loaihang where id=? ");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    function store($data)
    {
        if (isset($data)) {
            $loai = $data['loai'];
            $hang = $data['hang'];
            $ten = $data['tensanpham'];
            $masp = $data['masanpham'];
            $dungluong = $data['dungluong'];
            $mau = $data['mau'];
            $gia = $data['gia'];
            $soluong = $data['soluong'];
            $mota = $data['mota'];
            $hinh = $data['hinh'];
        } else {
            return "không có data";
        }

        $sql = $this->conn->prepare("insert into hanghoa(ten, dung_luong, mau, gia, so_luong, id_hang, id_loai, mo_ta, hinh, ma_sp) value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param("sssiiiisss", $ten,  $dungluong, $mau, $gia, $soluong, $hang, $loai, $mota, $hinh, $masp);
        $sql->execute();

        //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
        $result = $sql->affected_rows;

        if ($result < 0) {
            return false;
        } else {
            return true;
        }
    }

    function update($data)
    {
        if (isset($data)) {
            $id = $data['id'];
            $loai = $data['loai'];
            $hang = $data['hang'];
            $ten = $data['tensanpham'];
            $masp = $data['masanpham'];
            $dungluong = $data['dungluong'];
            $mau = $data['mau'];
            $gia = $data['gia'];
            $soluong = $data['soluong'];
            $mota = $data['mota'];
            if (isset($data['hinh'])) {
                $hinh = $data['hinh'];
            } else {
                $hinh = "";
            }
        } else {
            return "không có data";
        }

        if ($hinh == "") {
            $sql = $this->conn->prepare("update hanghoa set ten=?, dung_luong=?, mau=?, gia=?, so_luong=?, id_hang=?, id_loai=?, mo_ta=?, ma_sp=? where id=?");
            $sql->bind_param("sssiiiissi", $ten,  $dungluong, $mau, $gia, $soluong, $hang, $loai, $mota, $masp, $id);
            $sql->execute();

            //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
            $result = $sql->affected_rows;

            if ($result < 0) {
                return false;
            } else {
                return true;
            }
        } else {
            $sql = $this->conn->prepare("update hanghoa set ten=?, dung_luong=?, mau=?, gia=?, so_luong=?, id_hang=?, id_loai=?, mo_ta=?, ma_sp=?, hinh=? where id=?");
            $sql->bind_param("sssiiiisssi", $ten,  $dungluong, $mau, $gia, $soluong, $hang, $loai, $mota, $masp, $hinh, $id);
            $sql->execute();

            //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
            $result = $sql->affected_rows;

            if ($result < 0) {
                return false;
            } else {
                return true;
            }
        }
    }

    function delete($id)
    {
        $sql = $this->conn->prepare("delete from hanghoa where id=?");
        $sql->bind_param("i", $id);
        $sql->execute();

        //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
        $result = $sql->affected_rows;

        if ($result < 1) {
            return false;
        } else {
            return true;
        }
    }

    function themLoai($data)
    {
        if (isset($data)) {
            $ten = $data['tenloaisanpham'];
        } else {
            return "không có data";
        }
        $sql = $this->conn->prepare("insert into loaihang(ten_loai) value(?)");
        $sql->bind_param("s", $ten);
        $sql->execute();

        //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
        $result = $sql->affected_rows;

        if ($result < 0) {
            return false;
        } else {
            return true;
        }
    }

    function suaLoai($data)
    {
        if (isset($data)) {
            $id = $data['id'];
            $ten = $data['tenloaisanpham'];
        } else {
            return "không có data";
        }

        $sql = $this->conn->prepare("update loaihang set ten_loai=? where id=?");
        $sql->bind_param("si", $ten, $id);
        $sql->execute();

        //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
        $result = $sql->affected_rows;

        if ($result < 0) {
            return false;
        } else {
            return true;
        }
    }

    function themHang($data)
    {
        if (isset($data)) {
            $ten = $data['tenhang'];
        } else {
            return "không có data";
        }
        $sql = $this->conn->prepare("insert into hang(ten_hang) value(?)");
        $sql->bind_param("s", $ten);
        $sql->execute();

        //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
        $result = $sql->affected_rows;

        if ($result < 0) {
            return false;
        } else {
            return true;
        }
    }

    function suaHang($data)
    {
        if (isset($data)) {
            $id = $data['id'];
            $ten = $data['tenhang'];
        } else {
            return "không có data";
        }

        $sql = $this->conn->prepare("update hang set ten_hang=? where id=?");
        $sql->bind_param("si", $ten, $id);
        $sql->execute();

        //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
        $result = $sql->affected_rows;

        if ($result < 0) {
            return false;
        } else {
            return true;
        }
    }

    function getOrder()
    {
        $sql = $this->conn->prepare("select * from donhang");
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function changeStatus($data)
    {
        $id_donhang = $data['id_donhang'];
        $trang_thai = $data['trang_thai'];




        $sql = $this->conn->prepare("update donhang set trang_thai=? where id=?");
        $sql->bind_param("si", $trang_thai, $id_donhang);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->affected_rows >= 0) {
            return true;
        }
        return false;
    }

    function changeDate($data)
    {
        $id_donhang = $data['id_donhang'];
        $ngay_giao = $data['ngay_giao'];

        $sql = $this->conn->prepare("update donhang set ngay_giao=? where id=?");
        $sql->bind_param("si", $ngay_giao, $id_donhang);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->affected_rows >= 0) {
            return true;
        }
        return false;
    }

    function getOrderDetail($id_donhang)
    {
        $sql = $this->conn->prepare("select * from chitietdonhang where id_donhang=?");
        $sql->bind_param("i", $id_donhang);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function getKhachhang()
    {
        $sql = $this->conn->prepare("select * from khachhang");
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function getComment($id)
    {
        $sql = $this->conn->prepare("SELECT * from binhluan JOIN khachhang ON binhluan.id_khachhang = khachhang.id WHERE binhluan.id_hanghoa = ?");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function getAvgstar($id)
    {
        $sql = $this->conn->prepare("SELECT ROUND(AVG(sao),1) as tb from binhluan where id_hanghoa=?");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    function addComment($iditem, $iduser, $data)
    {

        $id_item = $iditem;
        $id_user = $iduser;
        $comment = $data['comment'];
        $rate = $data['rate'];



        $sql = $this->conn->prepare("insert into binhluan(id_hanghoa, id_khachhang, noidung, sao) value(?, ?, ?, ?)");
        $sql->bind_param("iisi", $id_item, $id_user, $comment, $rate);
        $sql->execute();

        //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
        $result = $sql->affected_rows;


        if ($result < 1) {
            return false;
        } else {
            return true;
        }
    }

    function countComment($iditem)
    {
        $id_item = $iditem;

        $sql = $this->conn->prepare("SELECT count(*) as soluong from binhluan where id_hanghoa = ?");
        $sql->bind_param("i", $id_item);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

}

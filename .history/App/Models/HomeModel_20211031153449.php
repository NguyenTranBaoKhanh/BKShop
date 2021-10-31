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


    function getBrand(){
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

    function getByBrand($brand){
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

    function get_ma_sp_and_mau($ma_sp, $mau){
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

    function get_ma_sp($ma_sp){
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

    function get_sp_tuong_tu($ma_sp){
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
    function getType(){
        $sql = $this->conn->prepare("select * from loaihang");
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

}

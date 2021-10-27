<?php

use App\Core\Database;

class PhukienModel extends Database
{
    function all()
    {
        // $sql = 'SELECT * FROM Cakes';
        // $result = $this->conn->query($sql);
        $id_dienthoai = 1;
        $id_maytinhbang = 4;
        $sql = $this->conn->prepare("SELECT * FROM hanghoa EXCEPT SELECT * FROM hanghoa WHERE id_loai = ? or id_loai = ?");
        $sql->bind_param("ii", $id_dienthoai, $id_maytinhbang);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function getName()
    {
        $id_dienthoai = 1;
        $id_maytinhbang = 4;
        $sql = $this->conn->prepare("SELECT * FROM loaihang EXCEPT SELECT * FROM loaihang WHERE id = ? or id = ?");
        $sql->bind_param("ii", $id_dienthoai, $id_maytinhbang);
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
        $id_dienthoai = 1;
        $id_maytinhbang = 4;
        $sql = $this->conn->prepare("SELECT * FROM hanghoa EXCEPT SELECT * FROM hanghoa WHERE id_loai = ? or id_loai = ?");
        $sql->bind_param("ii", $id_dienthoai, $id_maytinhbang);
        $sql->execute();
        $result = $sql->get_result();
        // $sql = 'select id from hanghoa ';
        // $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }

    function getItem($limit, $num)
    {
        $id_dienthoai = 1;
        $id_maytinhbang = 4;
        $sql = $this->conn->prepare("SELECT * FROM hanghoa EXCEPT SELECT * FROM hanghoa WHERE id_loai = ? or id_loai = ? limit ?, ?");
        $sql->bind_param("iiii", $id_dienthoai, $id_maytinhbang, $limit, $num);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }




    function countItemOfType($id)
    {
        $sql = $this->conn->prepare("select * from hanghoa where id_loai=?");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }

    function getById($id_loai){
        $sql = $this->conn->prepare("SELECT * FROM hanghoa WHERE id_loai = ?");
        $sql->bind_param("i", $id_loai);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function getNameOfId($id){
        $sql = $this->conn->prepare("select ten_loai from loaihang where id=? ");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

}

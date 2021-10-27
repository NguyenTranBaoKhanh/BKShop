<?php

use App\Core\Database;

class MaytinhbangModel extends Database
{
    function all()
    {
        // $sql = 'SELECT * FROM Cakes';
        // $result = $this->conn->query($sql);
        $id_maytinhbang = 4;
        $sql = $this->conn->prepare("SELECT * FROM hanghoa where id_loai=?");
        $sql->bind_param("i", $id_maytinhbang);
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
        $id_maytinhbang = 4;
        $sql = $this->conn->prepare("SELECT * FROM hanghoa where id_loai=?");
        $sql->bind_param("i", $id_maytinhbang);
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
        $id_maytinhbang = 4;
        $sql = $this->conn->prepare("select * from hanghoa where id_loai=? limit ?, ? ");
        $sql->bind_param("iii", $id_maytinhbang, $limit, $num);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }



    function getItemOfTypeOfBrand($id_brand, $limit, $num)
    {
        $id_maytinhbang = 4;
        $sql = $this->conn->prepare("select * from hanghoa where id_hang=? and id_loai=? limit ?, ?");
        $sql->bind_param("iiii", $id_brand, $id_maytinhbang, $limit, $num);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }


    function countItemOfBrand($id)
    {
        $id_maytinhbang = 4;
        $sql = $this->conn->prepare("select * from hanghoa where id_hang=? and id_loai=?");
        $sql->bind_param("ii", $id, $id_maytinhbang);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }
}

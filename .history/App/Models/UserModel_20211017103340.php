<?php

use App\Core\Database;

class UserModel extends Database
{
  function checkLogin($data)
    {
        if (isset($data)) {
            $taikhoan = $data['username'];
            $matkhau = $data['password'];
        } else {
            return "không có data";
        }

        $sql = $this->conn->prepare("select * from khachhang where tai_khoan = ?");
        $sql->bind_param("s", $taikhoan);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {

            $passwordHashed = $result->fetch_assoc()['password'];
            $isPassword = password_verify($matkhau, $passwordHashed);

            if ($isPassword == true) {
                return true;
            } else {
                return "Password incorrect!";
            }
        } else {

            return "Do not email exists: " . $taikhoan;
        }
    }

    function register($data)
    {
        if (isset($data)) {
            $name = $data['name'];
            $phone = $data['phone'];
            $address = $data['address'];
            $email = $data['email'];
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $role = 1;
            $avt = "user.png";

            $sql = $this->conn->prepare("insert into users(name, phone, address, email, password, role, avatar) value(?, ?, ?, ?, ?, ?, ?)");
            $sql->bind_param("sssssis", $name, $phone, $address, $email, $password, $role, $avt);
            $sql->execute();

            //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
            $result = $sql->affected_rows;


            if ($result < 1) {
                return false;
            } else {
                return true;
            }
        }
        return false;
    }
}
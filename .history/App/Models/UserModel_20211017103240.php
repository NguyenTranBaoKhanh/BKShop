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
}
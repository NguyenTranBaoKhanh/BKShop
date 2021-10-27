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
      $ten = $data['hoten'];
      $diachi = $data['diachi'];
      $sdt = $data['diachi'];
      $taikhoan = $data['taikhoan'];
      $matkhau = $data['matkhau'];
      $matkhau = password_hash($data['matkhau'], PASSWORD_DEFAULT);

      

      $sql = $this->conn->prepare("insert into khachhang(ten, dia_chi, sdt, tai_khoan, mat_khau) value(?, ?, ?, ?, ?)");
      $sql->bind_param("sssss", $ten, $diachi, $sdt, $taikhoan, $matkhau);
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

  function isUserName($taikhoan)
    {
        $sql = $this->conn->prepare("select * from khachhang where taikhoan = ?");
        $sql->bind_param("s", $taikhoan);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}

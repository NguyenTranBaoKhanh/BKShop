<?php

use App\Core\Database;

class UserModel extends Database
{
  function checkLogin($data)
  {
    if (isset($data)) {
      $taikhoan = $data['taikhoan'];
      $matkhau = $data['matkhau'];
    } else {
      return "không có data";
    }

    $sql = $this->conn->prepare("select * from khachhang where tai_khoan = ?");
    $sql->bind_param("s", $taikhoan);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->num_rows > 0) {

      $passwordHashed = $result->fetch_assoc()['mat_khau'];
      $isPassword = password_verify($matkhau, $passwordHashed);

      if ($isPassword == true) {
        return true;
      } else {
        return "Sai mật khẩu!";
      }
    } else {
      return "Tài khoản không tồn tại!";
    }
  }

  function getUser($taikhoan)
  {

    $sql = $this->conn->prepare("select * from khachhang where tai_khoan= ? ");
    $sql->bind_param("s", $taikhoan);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->num_rows > 0) {
      return $result->fetch_assoc();
    } else {
      return false;
    }
  }

  function getUserById($id_khachhang)
  {
    $sql = $this->conn->prepare("select * from khachhang where id= ? ");
    $sql->bind_param("s", $id_khachhang);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->num_rows > 0) {
      return $result->fetch_assoc();
    } else {
      return false;
    }
  }

  function register($data)
  {
    if (isset($data)) {
      $ten = $data['hoten'];
      $diachi = $data['diachi'];
      $sdt = $data['sdt'];
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

  function check_login_Admin($data)
  {
    if (isset($data)) {
      $taikhoan = $data['taikhoan'];
      $matkhau = $data['matkhau'];
    } else {
      return "không có data";
    }

    $sql = $this->conn->prepare("select * from nhanvien where tai_khoan = ?");
    $sql->bind_param("s", $taikhoan);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->num_rows > 0) {
      $result = $result->fetch_assoc();

      if ($matkhau == $result['mat_khau']) {
        return [true, $result];
      } else {
        return [false, ''];
      }
    } else {
      return [false, ''];
    }
  }

  function update($data)
  {
    $sql = $this->conn->prepare("update khachhang set ten=?, sdt=?, dia_chi=? where id=?");
    $sql->bind_param("sssi", $data['hoten'], $data['sdt'], $data['diachi'], $data['id']);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->affected_rows >= 0) {
      return true;
    }
    return false;
  }


  function getOrderByUser($id)
  {
    $sql = $this->conn->prepare("select * from donhang where id_khachhang=? ORDER BY id DESC");
    $sql->bind_param("i", $id);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->num_rows > 0) {
      return $result->fetch_all(MYSQLI_ASSOC);
    } else {
      return false;
    }
  }

  function getDetailOrder($id){
    $sql = $this->conn->prepare("select * from chitietdonhang where id_donhang=?");
    $sql->bind_param("i", $id);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->num_rows > 0) {
      return $result->fetch_all(MYSQLI_ASSOC);
    } else {
      return false;
    }
  }
}

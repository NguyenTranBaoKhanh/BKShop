<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./img/BK-logos.jpg" type="image/x-icon">
  <title>BK Shop</title>
  <link href=”https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css” rel=”stylesheet” />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/base.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/banner.css">
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/productDetails.css">
  <link rel="stylesheet" href="./fonts/fontawesome-free-5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>

  <div class="wrapper">
    <div class="container d-flex">
      <div class="area-form">
        <h1 class="name-form">ĐĂNG NHẬP</h1>
        <form class="" action="<?=DOCUMENT_ROOT?>/admin/account/check_login" method="post">
          <div class="mb-3 ">
            <input class="form-input" type="text" name="taikhoan" placeholder="Tên đăng nhập" required>
          </div>
          <div class="mb-3">
            <input class="form-input" type="password" name="matkhau" placeholder="Mật khẩu" required>
          </div>
          <button class="btn btn-lg btn-login" type="submit">ĐĂNG NHẬP</button>
        </form>
        <!-- <div class="login-sub d-flex justify-content-between">
          <span>
            <span>Chưa có tài khoản?</span>
            <a href="">(Đăng ký ngay)</a>
          </span>
          <a href="">Quên mật khẩu</a>
        </div> -->
      </div>
    </div>
  </div>

</body>

</html>
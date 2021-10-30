

  <div class="wrapper body_center">
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
      </div>
    </div>
  </div>

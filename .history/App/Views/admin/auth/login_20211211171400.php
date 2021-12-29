

  <!-- <div class="wrapper body_center">
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
  </div> -->

  <div class="modal1 d-flex">
        <div class="modal1_overlay"></div>
        <div class="modal1_body">
            <!-- <div class="wrapper "> -->
            <div class="container d-flex">
                <div class="area-form">
                    <hr />
                    <h1 class="name-form">ĐĂNG NHẬP</h1>
                    <p>đăng nhập với tư cách admin</p>
                    <form class="" action="<?=DOCUMENT_ROOT?>/admin/account/check_login" method="post">
                        <div class="mb-3">
                            <!-- <input class="form-input" type="text" name="username" placeholder="Tên đăng nhập" required> -->
                            <label for="inp" class="inp">
                                <input class="form-input" name="taikhoan" type="text" id="inp" placeholder="&nbsp;" required/>
                                <span class="label">Tên đăng nhập</span>
                                <span class="focus-bg"></span>
                            </label>
                        </div>
                        <div class="mb-3">
                            <!-- <input class="form-input" type="password" name="password" placeholder="Mật khẩu" required /> -->
                            <label for="inp" class="inp">
                                <input class="form-input" name="matkhau" type="password" id="inp" placeholder="&nbsp;" required />
                                <span class="label">Mật khẩu</span>
                                <span class="focus-bg"></span>
                            </label>
                        </div>
                        <button class="btn btn-lg btn-login" type="submit">
                            ĐĂNG NHẬP
                        </button>
                        <hr />

                    </form>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>

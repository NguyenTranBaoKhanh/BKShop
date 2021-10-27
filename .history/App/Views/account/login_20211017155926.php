<div class="wrapper">
        <div class="container d-flex">
            <div class="area-form">
                <h1 class="name-form">ĐĂNG NHẬP</h1>
                <form action="<?= DOCUMENT_ROOT?>/account/check_login" class="" action="" method="post">
                    <div class="mb-3 ">
                        <input class="form-input" type="text" name="taikhoan" placeholder="Tên đăng nhập" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-input" type="password" name="matkhau" placeholder="Mật khẩu" required>
                    </div>
                    <button class="btn btn-lg btn-login" type="submit">ĐĂNG NHẬP</button>
                </form>
                <div class="login-sub d-flex justify-content-between">
                    <span>
                        <span>Chưa có tài khoản?</span>
                    <a href="">(Đăng ký ngay)</a>
                    </span>
                    <a href="">Quên mật khẩu</a>
                </div>
            </div>
        </div>
    </div>
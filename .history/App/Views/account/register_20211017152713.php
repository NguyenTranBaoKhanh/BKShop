<div class="wrapper">
        <div class="container d-flex">
            <div class="area-form">
                <h1 class="name-form">ĐĂNG KÝ</h1>
                <form action="<?=DOCUMENT_ROOT?>/account/check_register"class="" id="form1" action="" method="post">
                    <div class="mb-4 form-group">
                        <label for="hoten">Họ và tên:</label>
                        <input class="form-input" id="hoten" type="text" name="hoten" placeholder="" required>
                        <span class="form-message"></span>
                    </div>
                    <div class="mb-4 form-group">
                        <label for="diachi">Địa chỉ:</label>
                        <input class="form-input" id="diachi" type="text" name="diachi" placeholder="" required>
                        <span class="form-message"></span>
                    </div>
                    <div class="mb-4 form-group">
                        <label for="sdt">Số điện thoại:</label>
                        <input class="form-input" id="sdt" type="text" name="sdt" placeholder="" required>
                        <span class="form-message"></span>
                    </div>
                    <div class="mb-4 form-group">
                        <label for="taikhoan">Tên đăng nhập:</label>
                        <input class="form-input" id="taikhoan" type="text" name="taikhoan" placeholder="" required>
                        <span class="form-message"></span>
                    </div>
                    <div class="mb-4 form-group">
                        <label for="matkhau">Mật khẩu:</label>
                        <input class="form-input" id="matkhau" type="password" name="matkhau" placeholder="" required>
                        <span class="form-message"></span>
                    </div>
                    <div class="mb-4 form-group">
                        <label for="re-matkhau">Nhập lại mật khẩu:</label>
                        <input class="form-input" id="re-matkhau" type="password" name="re-matkhau" placeholder="" required>
                        <span class="form-message"></span>
                    </div>
                    <button class="btn btn-lg btn-login" type="submit">ĐĂNG KÝ</button>
                </form>
                <div class="login-sub d-flex justify-content-between">
                    <span>
                        <span>Đã có tài khoản?</span>
                    <a href="">(Đăng nhập)</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
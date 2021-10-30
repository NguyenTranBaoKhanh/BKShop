<div class="wrapper">
    <div class="container d-flex">
        <div class="area-form">
            <h1 class="name-form">ĐĂNG NHẬP</h1>
            <form action="<?= DOCUMENT_ROOT ?>/account/check_login" class="" action="" method="post">

                <?php if (isset($data['error'])) : ?>
                    <?php foreach ($data['error'] as $index => $error) : ?>
                        <p class="text-center mb-3 form-message fs-3"><?= $error ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="mb-3">
                    <!-- <input class="form-input" type="text" name="taikhoan" placeholder="Tên đăng nhập" required> -->

                    <label for="inp" class="inp">
                        <input class="form-input" name="taikhoan" type="text" id="inp" placeholder="&nbsp;" required />
                        <span class="label">Tên đăng nhập</span>
                        <span class="focus-bg"></span>
                    </label>


                </div>
                <div class="mb-3">
                    <!-- <input class="form-input" type="password" name="matkhau" placeholder="Mật khẩu" required> -->

                    <label for="inp" class="inp">
                        <input class="form-input" name="matkhau" type="password" id="inp" placeholder="&nbsp;" required />
                        <span class="label">Mật khẩu</span>
                        <span class="focus-bg">aaaaaaaaaaaaa</span>
                    </label>
                </div>
                <button class="btn btn-lg btn-login" type="submit">ĐĂNG NHẬP</button>
            </form>
            <div class="login-sub d-flex justify-content-between">
                <span>
                    <span>Chưa có tài khoản?</span>
                    <a href="<?= DOCUMENT_ROOT ?>/account/register">(Đăng ký ngay)</a>
                </span>
                <a href="">Quên mật khẩu</a>
            </div>
        </div>
    </div>
</div>
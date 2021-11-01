<div class="wrapper bodymin">
        <div class="container">
            <h3 class="current-position1">TÀI KHOẢN</h3>
            <div class="user-content d-flex">
                <div class="sidebar-user">
                    <div class="title-user d-flex">
                        <div class="img-user"><i class="fas fa-user-circle"></i></div>
                        <div class="name-user">NGUYỄN TRẦN BẢO KHÁNH</div>
                    </div>
                    <ul>

                        <li><a href="<?=DOCUMENT_ROOT?>/khachhang"><i class="fas fa-user"></i>Thông tin khách hàng</a></li>
                        <li><a href=""><i class="far fa-calendar-minus"></i>Đơn đặt hàng</a></li>
                        <!-- <li><a href=""><i class="fas fa-file-medical-alt"></i>Lịch sử mua hàng</a></li> -->
                        <li><a href="<?= DOCUMENT_ROOT ?>/account/signout"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
                    </ul>
                </div>
                <div class="body-user">
                    <div class="form-user">
                        <div class="title">THÔNG TIN TÀI KHOẢN</div>
                        <form action="" method="post">
                            <div class="">
                                <label for="hoten" class="form-label">Họ tên:</label>
                                <input class="form-input" id="hoten" name="hoten" type="text" value="<?=$data['user']['ten']?>" required>
                            </div>
                            <div>
                                <label for="sdt" class="form-label">Số điện thoại:</label>
                                <input class="form-input" id="sdt" name="sdt" type="text" value="" required>
                            </div>
                            <div>
                                <label for="diachi" class="form-label">Địa chỉ:</label>
                                <input class="form-input" id="diachi" name="diachi" type="text" value="" required>
                            </div>

                            <button class="btn btn-lg btn-login">CẬP NHẬT</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
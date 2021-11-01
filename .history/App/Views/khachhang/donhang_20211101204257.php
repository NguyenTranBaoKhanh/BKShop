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

                        <li><a href="<?=DOCUMENT_ROOT?>/khachhang" class="<?= $GLOBALS["currentController"]=="khachhang"? "sidebar-active": ""?>"><i class="fas fa-user"></i>Thông tin khách hàng</a></li>
                        <li><a href="<?=DOCUMENT_ROOT?>/khachhang/donhang" class="<?= $GLOBALS["currentAction"]=="donhang"? "sidebar-active": ""?>"><i class="far fa-calendar-minus"></i>Đơn đặt hàng</a></li>
                        <!-- <li><a href=""><i class="fas fa-file-medical-alt"></i>Lịch sử mua hàng</a></li> -->
                        <li><a href="<?= DOCUMENT_ROOT ?>/account/signout"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
                    </ul>
                </div>
                <div class="body-user">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên người nhận</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Ngày đặt</th>
                                <th scope="col">Ngày giao</th>
                                <th scope="col">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bảo khánh </td>
                                <td>long an an giang</td>
                                <td>01234566789</td>
                                <td>01-11-2021 10:53:48</td>
                                <td>01-11-2021 10:53:48</td>
                                <td><a href="">Đã giao</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
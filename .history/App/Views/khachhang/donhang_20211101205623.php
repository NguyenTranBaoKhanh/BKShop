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

                    <li><a href="<?= DOCUMENT_ROOT ?>/khachhang"><i class="fas fa-user"></i>Thông tin khách hàng</a></li>
                    <li><a href="<?= DOCUMENT_ROOT ?>/khachhang/donhang" class="<?= $GLOBALS["currentAction"] == "donhang" ? "sidebar-active" : "" ?>"><i class="far fa-calendar-minus"></i>Đơn đặt hàng</a></li>
                    <!-- <li><a href=""><i class="fas fa-file-medical-alt"></i>Lịch sử mua hàng</a></li> -->
                    <li><a href="<?= DOCUMENT_ROOT ?>/account/signout"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
                </ul>
            </div>
            <div class="body-user">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th scope="col">#</th> -->
                            <th scope="col">Tên người nhận</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Ngày đặt</th>
                            <th scope="col">Ngày giao</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['donhang'] as $index => $donhang) : ?>
                            <tr>
                                <!-- <th scope="row"><?= $index + 1 ?></th> -->
                                <td><?= $donhang['ten_khachhang'] ?></td>
                                <td><?= $donhang['dia_chi'] ?></td>
                                <td><?= $donhang['so_dien_thoai'] ?></td>
                                <td><?= $donhang['ngay_dat'] ?></td>
                                <td><?= $donhang['ngay_giao'] ?></td>
                                <td><a href=""><?= $donhang['trang_thai'] ?></a></td>
                                <td><a href="">Chi tiết</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
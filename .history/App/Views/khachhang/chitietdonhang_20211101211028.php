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
                    <li><a href="<?= DOCUMENT_ROOT ?>/khachhang/donhang" class="<?= $GLOBALS["currentAction"] == "chitietdonhang" ? "sidebar-active" : "" ?>"><i class="far fa-calendar-minus"></i>Đơn đặt hàng</a></li>
                    <!-- <li><a href=""><i class="fas fa-file-medical-alt"></i>Lịch sử mua hàng</a></li> -->
                    <li><a href="<?= DOCUMENT_ROOT ?>/account/signout"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
                </ul>
            </div>
            <div class="body-user">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data['chitietdonhang'])) : ?>

                            <?php foreach ($data['chitietdonhang'] as $index => $chitietdonhang) : ?>
                                <tr>
                                    <th scope="row"><?= $index + 1 ?></th>
                                    <td><?= $chitietdonhang['ten_khachhang'] ?></td>
                                    <td><?= $chitietdonhang['dia_chi'] ?></td>
                                    <td><?= $chitietdonhang['so_dien_thoai'] ?></td>
                                    <td><?= $chitietdonhang['ngay_dat'] ?></td>
                                    <td><?= $chitietdonhang['ngay_giao'] ?></td>
                                    <td><a href=""><?= $donhang['trang_thai'] ?></a></td>
                                    <td><a style="color: blue" href="">Chi tiết</a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p class="text-center fs-1">Chưa có đơn hàng!</p>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
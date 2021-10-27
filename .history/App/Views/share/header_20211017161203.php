<!-- header -->
<div class="wrapper">
    <header id="header" class="header">
        <div class="header1 container d-flex justify-content-between align-items-center">
            <marquee class="header1__slogan" behavior="" direction="">UY TÍN - AN TOÀN - TIỆN LỢI</marquee>

                <div class="header1__users d-flex">
                    <div class="header1__user">
                        <i class="fas fa-user header1__user-icon"></i>
                        <b class="header1__user-name header1__user-name--separate"><?= $_SESSION['user']['ten'] ?></b>
                        <div class="header1__user-dropdown">
                            <ul>
                                <li><a href="">Thông tin tài khoản</a></li>
                                <li><a href="">Đơn đặt hàng</a></li>
                                <li><a href="">Lịch sử mua hàng</a></li>
                                <li><a href="">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header1__cart">
                        <i class="fas fa-shopping-bag header1__cart-icon"></i>
                        <span class="header1__cart-amount">+99</span>
                    </div>
                </div>

                <!-- <div class="header1__access">
                    <a href="<?= DOCUMENT_ROOT ?>/account" class="login__link header1__user-name--separate">Đăng nhập</a>
                    <a href="<?= DOCUMENT_ROOT ?>/account/register" class="register__link">Đăng ký</a>
                </div> -->
        </div>


    <div class="header2">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="<?= DOCUMENT_ROOT ?>"><img class="header2__logo" src="<?= PUBLIC_URL ?>/img/BK Shop-transparent - Copy1.png" alt=""></a>
            <div class="header2__search">
                <form action="<?= DOCUMENT_ROOT ?>/home/search" method="get">
                    <input class="header2__search-input" id="search" name="search" type="text" placeholder="Tìm kiếm...">
                    <label class="header2__search-icon" for="search"><i class="fas fa-search header2__search-icon"></i></label>
                </form>
            </div>
            <div class="header2__nav">
                <div class="header2__nav-items d-flex flex-column align-items-center">
                    <div class="header2__nav-item d-flex flex-column align-items-center">
                        <a href="<?= DOCUMENT_ROOT . "/dienthoai" ?>"><i class="fas fa-mobile-alt header2__nav-icon"></i></a>
                        <div class="header2__nav-name"><a href="<?= DOCUMENT_ROOT . "/dienthoai" ?>">ĐIỆN THOẠI</a></div>
                    </div>
                    <div class="header2__nav-dropdown">
                        <ul>
                            <?php foreach ($data['brand'] as $index => $brand) : ?>
                                <li class="text-center"><a href="<?= DOCUMENT_ROOT . "/dienthoai/hang?hang=" . $brand['ten_hang'] ?>"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><?= $brand['ten_hang'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header2__nav">
                <div class="header2__nav-items d-flex flex-column align-items-center">
                    <div class="header2__nav-item d-flex flex-column align-items-center">
                        <a href="<?= DOCUMENT_ROOT . "/maytinhbang" ?>"><i class="fas fa-tablet-alt header2__nav-icon"></i></a>
                        <div class="header2__nav-name"><a href="<?= DOCUMENT_ROOT . "/maytinhbang" ?>">MÁY TÍNH BẢNG</a></div>
                    </div>
                    <div class="header2__nav-dropdown">
                        <ul>
                            <?php foreach ($data['brand'] as $index => $brand) : ?>
                                <li class="text-center"><a href="<?= DOCUMENT_ROOT . "/maytinhbang/hang?hang=" . $brand['ten_hang'] ?>"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><?= $brand['ten_hang'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="header2__nav">
                        <div class="header2__nav-items d-flex flex-column align-items-center">
                            <div class="header2__nav-item d-flex flex-column align-items-center">
                                <a href=""><i class="fas fa-laptop header2__nav-icon"></i></a>
                                <div class="header2__nav-name"><a href="">LAPTOP</a></div>
                            </div>
                            <div class="header2__nav-dropdown">
                                <ul>
                                    <li></i><a
                                            href=""><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><img class="logo_h" src="<?= PUBLIC_URL ?>/img/samsung.png" alt="">Samsung</a></li>
                                    <li></i><a
                                            href=""><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><img class="logo_h" src="<?= PUBLIC_URL ?>/img/xiaomi.png" alt="">Xiaomi</a></li>
                                    <li></i><a
                                            href=""><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><img class="logo_h" src="<?= PUBLIC_URL ?>/img/oneplus.png" alt="">Oneplus</a></li>
                                    <li></i><a
                                            href=""><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><img class="logo_h" src="<?= PUBLIC_URL ?>/img/oppo.png" alt="">Oppo</a></li>
                                    <li></i><a
                                            href=""><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><img class="logo_h" src="<?= PUBLIC_URL ?>/img/realme.jpg" alt="">Realme</a></li>
                                    <li></i><a
                                            href=""><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><img class="logo_h" src="<?= PUBLIC_URL ?>/img/apple.png" alt="">Apple</a></li>
                                    <li></i><a
                                            href=""><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><img class="logo_h" src="<?= PUBLIC_URL ?>/img/vivo.png" alt="">Vivo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
            <div class="header2__nav">
                <div class="header2__nav-items d-flex flex-column align-items-center">
                    <div class="header2__nav-item d-flex flex-column align-items-center">
                        <a href="<?= DOCUMENT_ROOT . "/phukien" ?>"><i class="fas fa-headphones header2__nav-icon"></i></a>
                        <div class="header2__nav-name"><a href="<?= DOCUMENT_ROOT . "/phukien" ?>">PHỤ KIỆN</a></div>
                    </div>
                    <div class="header2__nav-dropdown">
                        <ul>
                            <?php foreach ($data['nameAccessory'] as $index => $brand) : ?>
                                <li class="text-center"><a href="<?= DOCUMENT_ROOT . "/phukien/loai?loai=" . $brand['id'] ?>"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><?= $brand['ten_loai'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header2__nav">
                <div class="header2__nav-items d-flex flex-column align-items-center">
                    <div class="header2__nav-item d-flex flex-column align-items-center">
                        <a href="#footer"><i class="fas fa-phone-volume header2__nav-icon"></i></a>
                        <div class="header2__nav-name"><a href="#footer">LIÊN HỆ</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </header>
</div>
<!-- header -->
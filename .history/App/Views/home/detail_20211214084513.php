    <!-- productDetails -->
    <div class="wrapper">
        <div class="container ">
            <div class="current-position">
                Điện thoại <i class="fas fa-chevron-right"></i><a href=""><?= $data['hang']['ten_hang'] ?></a>
            </div>
            <div class="product__name d-flex justify-content-between">
                <span class="name"><?= $data['item']['ten'] ?> <span class="fs-5">(số lượng: <?= $data['item']['so_luong'] ?>)</span></span>
                <div class="product__rating">
                    <span class="item__rating-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </span> (10 đánh giá)
                </div>
            </div>
            <hr>
            <div class="d-flex productDetails">
                <div class="productDetail-left">
                    <img id="zoom" src="<?= PUBLIC_URL ?>/img/<?= $data['item']['hinh'] ?>" alt="" class="productDetails__img">
                </div>
                <div class="productDetail-center">
                    <div class="productDetails_price">
                        Giá: <span class="productDetails_price-current"><?= number_format($data['item']['gia'] * 0.95) ?>đ</span> <span class="productDetails_price-old"><?= number_format($data['item']['gia']) ?>đ</span>
                    </div>
                    <div class="row row-cols-3 options">
                        <?php foreach ($data['ma_sp'] as $index => $item) : ?>
                            <a href="<?= DOCUMENT_ROOT . "/home/detail/" . $item['id'] . "/" . $item['mau'] ?>" class="option <?= $item['id'] == $data['id_url'] ? 'active' : '' ?>">
                                <div class="storage"><?= $item['dung_luong'] ?></div>
                                <div class="price"><?= number_format($item['gia'] * 0.95) ?> ₫</div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <span>Màu:</span>
                    <div class="row row-cols-3 options">
                        <?php foreach ($data['mau'] as $index => $item) : ?>
                            <a href="<?= DOCUMENT_ROOT . "/home/detail/" . $data['id_url'] . "/" . $item['mau'] ?>" class="option <?= $item['mau'] == $data['mau_url'] ? 'active' : '' ?>">
                                <div class="color"><?= $item['mau'] ?></div>
                                <!-- <div class="price"> ₫</div> -->
                            </a>
                        <?php endforeach; ?>

                    </div>
                    <button onclick="addToCart(<?= isset($_SESSION['user']) ?  $_SESSION['user']['id'] : 0 ?>,<?= $data['item']['id'] ?>)" class="btn-addtocart">Thêm vào giỏi hàng</button>
                </div>
                <div class="productDetail-right">
                    <div class="bonus">
                        <div class="bonus-title">
                            <i class="fas fa-gift"></i> Khuyễn mãi
                        </div>
                        <div class="bonus-content">

                            <p><i class="fas fa-check-circle"></i>Thu cũ đổi mới - Trợ giá ngay 15% Giảm ngay 35% khi mua kèm 2 điện thoại Samsung</p>
                            <p><i class="fas fa-check-circle"></i>[HOT] Thu cũ lên đời giá cao - Thủ tục nhanh - Trợ giá lên tới 1.000.000đ</p>
                            <p><i class="fas fa-check-circle"></i>Giảm: 100K áp dụng HSSV</p>
                            <p><i class="fas fa-check-circle"></i>Trả góp nhanh, lãi suất 0% qua thẻ tín dụng</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="description">
                <div class="description-title">Mô tả sản phẩm</div>
                <div class="description-content">
                    <p><?= $data['item']['mo_ta'] ?></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="dienthoai" class="title">
                SẢN PHẨM TƯƠNG TỰ
            </div>
            <div class="swiper mySwiper4">
                <div class="swiper-wrapper">
                    <?php foreach ($data['tuong_tu'] as $index => $item) : ?>
                        <div class="swiper-slide">

                            <a href="<?= DOCUMENT_ROOT . "/home/detail/" . $item['id'] . "/" . $item['mau'] ?>">
                                <div class="wipper__item">
                                    <div class="wipper__item__img" style="background-image: url(<?= PUBLIC_URL ?>/img/<?= $item['hinh'] ?>);"></div>
                                    <h4 class="wipper__item__name"><?= $item['ten'] ?></h4>
                                    <div class="wipper__item__price d-flex-end">
                                        <span class="wipper__item__price-old"><?= number_format($item['gia']) ?>đ</span>
                                        <span class="wipper__item__price-current"><?= number_format($item['gia'] * 0.95) ?>đ</span>
                                    </div>
                                    <a href="<?= DOCUMENT_ROOT . "/home/detail/" . $item['id'] . "/" . $item['mau'] ?>" class="btn btn-primary wipper__item__btn">Mua</a>
                                </div>
                            </a>


                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
    </div>

    <script src="<?= JS_URL ?>/jquery-1.8.3.min.js"></script>
    <script src="<?= JS_URL ?>/jquery.elevatezoom.js"></script>
    <script>
        $('#zoom').elevateZoom({
            zoomType: 'lens',
            lensShape: 'square',
            lensSize: 150
        });
    </script>
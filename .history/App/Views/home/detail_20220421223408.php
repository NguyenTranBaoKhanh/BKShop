    <!-- productDetails -->
    <div class="wrapper">


        <div class="container ">
            <div class="current-position">
                Điện thoại <i class="fas fa-chevron-right"></i><a href=""><?= $data['hang']['ten_hang'] ?></a>
            </div>
            <div class="product__name d-flex justify-content-between">
                <span class="name"><?= $data['item']['ten'] ?> <span class="fs-4">(số lượng: <?= $data['item']['so_luong'] ?>)</span></span>
                <div class="product__rating">
                    <span class="point">
                        <span class="point-left">
                            <?php if (($data['avg_star'])==NULL) : ?>
                                <?= $data['avg_star']['tb'] ?>
                            <?php else : ?>

                                <p style="text-align: center">Không có bình luận</p>

                            <?php endif; ?>
                        </span><span class="point-right">/5</span></span>
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

        <!-- comment -->
        <div class="container mb-5">
            <form action="###" method="post">
                <div class="cmt-top">
                    <div class="cmt-top-left">
                        <div class="panel">
                            <div class="panel-body">
                                <input type="text" class=" cmt-input" style="font-size: 2rem" placeholder="What are you thinking?">
                                <div class="">
                                    <button class="cmt-button" type="submit">
                                        Bình luận</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmt-top-right cmt-top-right--separate">
                        <div>Bạn cảm thấy sản phẩm thế nào?</div>
                        <div class="">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>

                </div>
            </form>

            <div class="cmt-body">

            </div>


            <div class="container mt-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="headings d-flex justify-content-between align-items-center mb-3">
                            <h5>Unread comments(6)</h5>
                            <div class="buttons">
                                <span class="badge bg-white d-flex flex-row align-items-center">
                                    <span class="text-primary">Comments "ON"</span>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    </div>
                                </span>
                            </div>
                        </div>

                        <?php if (!empty($data['comment'])) : ?>
                            <?php foreach ($data['comment'] as $index => $comment) : ?>


                                <div class="card p-3 mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="user d-flex flex-row align-items-center">
                                            <div class="img-user"><i class="fas fa-user-circle"></i></div>
                                            <span>
                                                <small class="font-weight-bold text-primary"><?= $comment['ten'] ?></small>
                                                <small class="font-weight-bold"><?= $comment['noidung'] ?></small>
                                            </span>
                                        </div>
                                        <small>2 days ago<?= $comment['ngaybinhluan'] ?></small>
                                    </div>
                                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                                        <div class="reply px-4">
                                            <small>Remove</small> <span class="dots"></span>
                                            <small>Reply</small> <span class="dots"></span>
                                            <small>Translate</small>
                                        </div>
                                        <div class="icons align-items-center">
                                            <?php for ($x = 1; $x <= $comment['sao']; $x++) { ?>
                                                <i class="fa fa-star text-warning"></i>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>

                            <p style="text-align: center">Không có bình luận</p>

                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
        <!-- comment comment -->
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
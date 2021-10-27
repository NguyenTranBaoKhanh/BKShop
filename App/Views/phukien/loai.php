<div class="content">
    <div class="container">
        <h1 id="sanpham" class="text-center">
            PHỤ KIỆN
        </h1>
        <div class="current-position1">
            <a href="<?= DOCUMENT_ROOT . "/phukien" ?>">Máy tính bảng</a> <i class="fas fa-chevron-right"></i><a href=""><?= $data['name']?></a>
        </div>
        <div class=" row row-cols-5 items">
            <?php if (!empty($data['item'])) : ?>

                <?php foreach ($data['item'] as $index => $item) : ?>
                    <div class="col item">
                        <a href="<?= DOCUMENT_ROOT . "/home/detail/" . $item['id'] . "/" . $item['mau'] ?>">
                            <div class="item__img" style="background-image: url(<?= PUBLIC_URL ?>/img/<?= $item['hinh'] ?>);"></div>
                            <h4 class="item__name"><?= $item['ten'] ?></h4>
                            <div class="item__price d-flex-end">
                                <span class="item__price-old"><?= number_format($item['gia']) ?>đ</span>
                                <span class="item__price-current"><?= number_format($item['gia'] * 0.95) ?>đ</span>
                            </div>
                            <div class="item__rating">
                                <span class="item__rating-star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </span> 10 đánh giá
                            </div>
                        </a>
                        <!-- <a href="" class="btn btn-primary item__btn">Mua</a> -->
                    </div>

                <?php endforeach; ?>
            <?php else : ?>
                <p style="transform: translateX(220%);">Hết hàng</p>

            <?php endif; ?>

        </div>
        <!-- <div class="see-more">Xem thêm sản phẩm</div> -->
    </div>
</div>
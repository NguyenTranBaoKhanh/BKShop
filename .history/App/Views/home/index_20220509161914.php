   <!-- banner -->
   <div class="wrapper">
       <div class="container banner">
           <div class="swiper mySwiper">
               <div class="swiper-wrapper">
                   <div class="swiper-slide">
                       <a href="#"><img class="banner__img" src="<?= PUBLIC_URL ?>/img/banner/oneplus-8-mobilecity.jpg" alt=""></a>
                   </div>
                   <div class="swiper-slide">
                       <a href="#"><img class="banner__img" src="<?= PUBLIC_URL ?>/img/banner/gt-neo_1623979053.jpg" alt=""></a>
                   </div>
                   <div class="swiper-slide">
                       <a href="#"><img class="banner__img" src="<?= PUBLIC_URL ?>/img/banner/oneplus-9r-banner-mobilecity.jpg" alt=""></a>
                   </div>
                   <div class="swiper-slide">
                       <a href="#"><img class="banner__img" src="<?= PUBLIC_URL ?>/img/banner/poco-m3-dgw.jpg" alt=""></a>
                   </div>
                   <div class="swiper-slide">
                       <a href="#"><img class="banner__img" src="<?= PUBLIC_URL ?>/img/banner/poco-x3-pro-dgw.jpg" alt=""></a>
                   </div>
                   <div class="swiper-slide">
                       <a href="#"><img class="banner__img" src="<?= PUBLIC_URL ?>/img/banner/realme-v15_1627787114.jpg" alt=""></a>
                   </div>
               </div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
               <div class="swiper-pagination"></div>
           </div>
       </div>
   </div>
   <!-- banner -->

   <!-- product -->
   <div class="wrapper">
       <div class="container ">
           <div class="banner_best__seller">
               <div class="title">
                   BÁN CHẠY
               </div>
               <!-- bestseller -->
               <div class="swiper mySwiper2">
                   <div class="swiper-wrapper">
                       <?php foreach ($data['pupular'] as $index => $item) : ?>
                           <div class="swiper-slide">
                               <a href="<?= DOCUMENT_ROOT . "/home/detail/" . $item['id'] . "/" . $item['mau'] ?>">
                                   <div class="wipper__item">
                                       <div class="wipper__item__img" style="background-image: url(<?= PUBLIC_URL ?>/img/<?= $item['hinh'] ?>);"></div>
                                       <h4 class="wipper__item__name"><?= $item['ten'] ?></h4>
                                       <div class="wipper__item__price d-flex-end">
                                           <span class="wipper__item__price-old"><?= $item['gia'] ?>đ</span>
                                           <span class="wipper__item__price-current"><?= number_format($item['gia'] * 0.9) ?>đ</span>
                                       </div>
                                       <a href="" class="btn btn-primary wipper__item__btn">Mua</a>
                                   </div>
                               </a>
                           </div>
                       <?php endforeach; ?>
                   </div>
                   <div class="swiper-button-next"></div>
                   <div class="swiper-button-prev"></div>
                   <div class="swiper-pagination"></div>
               </div>
           </div>
       </div>
       <div class="background__sub">
           <div class="container ">
               <div class="">
                   <div class="title">
                       PHỤ KIỆN NỔI BẬC
                   </div>
                   <!-- bestseller -->
                   <div class="swiper mySwiper3">
                       <div class="swiper-wrapper">
                           <?php foreach ($data['phukien'] as $index => $item) : ?>
                               <div class="swiper-slide">
                                   <a href="<?= DOCUMENT_ROOT . "/home/detail/" . $item['id'] . "/" . $item['mau'] ?>">
                                       <div class="wipper__item">
                                           <div class="wipper__item__img" style="background-image: url(<?= PUBLIC_URL ?>/img/<?= $item['hinh'] ?>);"></div>
                                           <h4 class="wipper__item__name"><?= $item['ten'] ?></h4>
                                           <div class="wipper__item__price d-flex-end">
                                               <span class="wipper__item__price-old"><?= $item['gia'] ?>đ</span>
                                               <span class="wipper__item__price-current"><?= number_format($item['gia'] * 0.9) ?>đ</span>
                                           </div>
                                           <a href="" class="btn btn-primary wipper__item__btn">Mua</a>
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
       </div>
       <div class="">
           <div class="container">
               <div id="sanpham" class="title">
                   SẢN PHẨM
               </div>
               <div class=" row row-cols-5 items">
                   <?php foreach ($data['itemOnPage'] as $index => $item) : ?>
                       <div class="col item">
                           <a href="<?= DOCUMENT_ROOT . "/home/detail/" . $item['id'] . "/" . $item['mau'] ?>">
                               <div class="item__img" style="background-image: url(<?= PUBLIC_URL ?>/img/<?= $item['hinh'] ?>);"></div>
                               <h4 class="item__name"><?= $item['ten'] ?></h4>
                               <div class="item__price d-flex-end">
                                   <span class="item__price-old"><?= number_format($item['gia']) ?>đ</span>
                                   <span class="item__price-current"><?= number_format($item['gia'] * 0.95) ?>đ</span>
                               </div>
                               <div class="item__rating">
                                   <!-- <?= ($data[$item['id']]['avg']) ?> -->
                                   <span class="item__rating-star">
                                       <?php for ($x = 1; $x <= floor($data[$item['id']]['avg']); $x++) { ?>
                                           <i class="fa fa-star text-warning"></i>
                                       <?php } ?>

                                       <?php for ($x = 1; $x <= 5 - floor($data[$item['id']]['avg']) - floor(5 - $data[$item['id']]['avg']); $x++) { ?>
                                           <i class="fas fa-star-half-alt text-warning"></i>
                                       <?php } ?>

                                       <?php for ($x = 1; $x <= floor(5 - $data[$item['id']]['avg']); $x++) { ?>
                                           <i class="far fa-star text-warning"></i>

                                       <?php  } ?>
                                       <!-- <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star-half-alt"></i>
                                       <i class="far fa-star"></i> -->
                                   </span> 10 đánh giá
                               </div>
                           </a>
                           <!-- <a href="" class="btn btn-primary item__btn">Mua</a> -->
                       </div>

                   <?php endforeach; ?>


               </div>
               <!-- <div class="see-more">Xem thêm sản phẩm</div> -->
               <div class="item__pagination">
                   <nav aria-label="Page navigation example">
                       <ul class="pagination justify-content-center">
                           <li class="page-item <?= $data['page'] <= 1 ? 'disabled' : '' ?>">
                               <a <?= $data['page'] <= 1 ? 'onclick="event.preventDefault()"' : '' ?> class="page-link" href="<?= DOCUMENT_ROOT . "/home?page=" . ($data['page'] - 1) . "#sanpham" ?>" aria-label="Previous">
                                   <span aria-hidden="true">&laquo;</span>
                               </a>
                           </li>
                           <?php for ($i = 1; $i <= $data['numPage']; $i++) : ?>
                               <li class="page-item <?= $i == $data['page'] ? 'page-active' : '' ?>"><a class="page-link" href="<?= DOCUMENT_ROOT . "/home?page=$i#sanpham" ?>"><?= $i ?></a></li>
                           <?php endfor; ?>
                           <li class="page-item <?= $data['page'] == $data['numPage'] ? 'disabled' : '' ?>">
                               <a <?= $data['page'] == $data['numPage'] ? 'onclick="event.preventDefault()"' : '' ?> class="page-link" href="<?= DOCUMENT_ROOT . "/home?page=" . ($data['page'] + 1) . "#sanpham" ?>" aria-label="Next">
                                   <span aria-hidden="true">&raquo;</span>
                               </a>
                           </li>
                       </ul>
                   </nav>
               </div>
           </div>
       </div>


   </div>

   <!-- product -->
   <a id="gototop" href="#header"><i class="fas fa-caret-square-up"></i></a>
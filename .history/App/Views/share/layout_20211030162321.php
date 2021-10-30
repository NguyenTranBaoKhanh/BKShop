<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= PUBLIC_URL ?>/img/BK-logos.jpg" type="image/x-icon">
    <title>BK Shop</title>
    <!-- <link href=”https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css” rel=”stylesheet” /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/base.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/style.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/header.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/banner.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/home.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/login.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/footer.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/productDetails.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/cart.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/fonts/fontawesome-free-5.15.4/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
</head>

<body>
    <p hidden id="documentRoot"><?= DOCUMENT_ROOT ?></p>
    <div id="toast">
      <div id="img"><b>!</b></div>
      <div id="desc">A notification message..</div>
    </div>

    <?php require_once(VIEW . '/share/header.php'); ?>

    <?php require_once(VIEW .  $view . ".php") ?>

    <?php require_once(VIEW . '/share/footer.php'); ?>
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <script src="<?= PUBLIC_URL ?>/js/swiper.js"></script>
    <script src="<?= PUBLIC_URL ?>/js/cart.js"></script>
   <!-- link use modal  -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade", //fade, cube, flip, cards, creative
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 4,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
        var swiper = new Swiper(".mySwiper3", {
            slidesPerView: 5,
            spaceBetween: 10,
            slidesPerGroup: 3,
            loop: false,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        var swiper = new Swiper(".mySwiper4", {
            slidesPerView: 5,
            spaceBetween: 10,
            slidesPerGroup: 3,
            loop: false,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>
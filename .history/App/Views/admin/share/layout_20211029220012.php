<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>


  <?php if (isset($_SESSION['admin'])) : ?>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <?php endif; ?>
  <?php if (!isset($_SESSION['admin'])) : ?>
    <link href=”https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css” rel=”stylesheet” />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <?php endif; ?>

</head>

<body>

  <?php if (isset($_SESSION["admin"])) require_once(VIEW . DS . "admin/share/sidebar.php") ?>

  <?php if (isset($_SESSION["admin"])) require_once(VIEW . DS . "admin/share/header.php") ?>

  <!-- <div class="content-wrapper">
        <?php require_once(VIEW .  $view . ".php") ?>

        
    </div> -->

  <div class="content-wrapper">
    <?php if (isset($_SESSION["admin"])) require_once VIEW . $view . ".php" ?>
    <?php if (!isset($_SESSION["admin"])) require_once VIEW . "/admin/auth/login.php" ?>
  </div>

  <?php if (isset($_SESSION["admin"])) require_once(VIEW . DS . "admin/share/footer.php") ?>

  <?php if (isset($_SESSION["admin"])) : ?>
    <!-- jQuery -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/moment/moment.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/dist/js/pages/dashboard.js"></script>




    

  <?php endif; ?>

</body>

</html>
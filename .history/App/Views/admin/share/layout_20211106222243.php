<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= PUBLIC_URL ?>/img/BK-logos.jpg" type="image/x-icon">
  <title>BKShop-Admin</title>


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

    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- Select2 -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
      <!-- BS Stepper -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/dist/css/adminlte.min.css">

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
    <!-- Bootstrap 4 -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/dist/js/adminlte.js"></script>

    <!-- Bootstrap4 Duallistbox -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- InputMask -->
<script src="<?= PUBLIC_URL . "/admin" ?>/plugins/moment/moment.min.js"></script>
<script src="<?= PUBLIC_URL . "/admin" ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Select2 -->
<script src="<?= PUBLIC_URL . "/admin" ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= PUBLIC_URL . "/admin" ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= PUBLIC_URL . "/admin" ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= PUBLIC_URL . "/admin" ?>/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?= PUBLIC_URL . "/admin" ?>/plugins/dropzone/min/dropzone.min.js"></script>


    <!-- DataTables  & Plugins -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      $(function() {
        $("#example1").DataTable({
          "paging": true,
          "ordering": true,
          "info": true,
          "searching": false,
          "responsive": true,
          "lengthChange": true,
          "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
    </script>


  <?php endif; ?>

</body>

</html>
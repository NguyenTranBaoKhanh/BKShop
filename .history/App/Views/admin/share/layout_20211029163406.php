<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/summernote/summernote-bs4.min.css">
</head>

<body>

    <?php require_once(VIEW . DS . "admin/share/sidebar.php") ?>

    <?php require_once(VIEW . DS . "admin/share/header.php") ?>

    <div class="content-wrapper">
        <?php require_once(VIEW .  $view . ".php") ?>
    </div>

    <?php require_once(VIEW . DS . "admin/share/footer.php") ?>


    <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
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


</body>

</html>
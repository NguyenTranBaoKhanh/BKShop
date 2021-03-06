<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Chi tiết đơn hàng</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Đơn hàng</li>
          <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>



<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- card-header -->
          
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tên sản phẩm</th>
                  <th>Số lượng</th>
                  <th>Giá</th>
                  
                  <th class="d-flex justify-content-around align-items-center">Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['donhang'] as $index => $donhang) : ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $donhang['id'] ?></td>
                    <td><?= $donhang['ten_khachhang'] ?></td>
                    <td><?= $donhang['dia_chi'] ?></td>
                    <td><?= $donhang['so_dien_thoai'] ?></td>
                    <td><?= $donhang['ngay_dat'] ?></td>
                    <td><?= $donhang['ngay_giao'] ?></td>
                    <td><?= number_format($donhang['gia']) ?></td>
                    <td>
                      <select name="trangthai" id="trangthai<?= $index + 1 ?>" onchange="change(<?= $donhang['id'] ?>,trangthai<?= $index + 1 ?>)" class="form-control">
                        <option value="<?= $donhang['trang_thai'] ?>" selected disabled><?= $donhang['trang_thai'] ?></option>
                        <option value="Chưa xử lý">Chưa xử lý</option>
                        <option value="Đang xử lý">Đang xử lý</option>
                        <option value="Chuẩn bị giao">Chuẩn bị giao</option>
                        <option value="Đang giao">Đang giao</option>
                        <option value="Đã giao">Đã giao</option>
                      </select>
                    </td>


                    <td class="d-flex justify-content-around align-items-center">
                      <!-- <button type="button" class="btn btn-primary">Sửa</button> -->
                      <a href="<?= DOCUMENT_ROOT ?>/admin/donhang/chitietdonhang/<?= $donhang['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

<script>
  function change(id_donhang, id_trangthai) {

    console.log(id_donhang);
    console.log(id_trangthai.value);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // console.log(this.responseText);
      }
    };
    xhttp.open(
      "GET", "<?= DOCUMENT_ROOT ?>/admin/donhang/changestatus?id_donhang=" + id_donhang + "&trang_thai=" + id_trangthai.value,
      true
    );
    xhttp.send();
  }
</script>
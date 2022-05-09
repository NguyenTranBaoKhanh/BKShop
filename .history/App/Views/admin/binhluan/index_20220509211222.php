<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Bình luận</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Khách hàng</li>
          <li class="breadcrumb-item active">Danh sách khách hàng</li>
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
                  <th>Tên</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Tài khoản</th>
                  
                  <!-- <th class="d-flex justify-content-around align-items-center">Thao tác</th> -->
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['khachhang'] as $index => $khachhang) : ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $khachhang['ten'] ?></td>
                    <td><?= $khachhang['dia_chi'] ?></td>
                    <td><?= $khachhang['sdt'] ?></td>
                    <td><?= $khachhang['tai_khoan'] ?></td>
                  
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
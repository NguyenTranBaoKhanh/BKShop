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
          <li class="breadcrumb-item active">Bình luận</li>
          <li class="breadcrumb-item active">Danh sách bình luận</li>
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
                  <th>Khách hàng</th>
                  <th>Sản phẩm</th>
                  <th>Nội dung</th>
                  <th>Ngày bình luận</th>
                  <th>Thao tác</th>
                  
                  <!-- <th class="d-flex justify-content-around align-items-center">Thao tác</th> -->
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['binhluan'] as $index => $binhluan) : ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $binhluan['ten'] ?></td>
                    <td><?= $binhluan['ten(1)'] ?></td>
                    <td><?= $binhluan['noidung'] ?></td>
                    <td>khánh</td>
                  
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
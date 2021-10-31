<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Sản phẩm</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Sản phẩm</li>
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
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
              <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/admin/sanpham/create">Thêm</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên</th>
                  <th>Giá</th>
                  <th>Số lượng</th>
                  <th>Hình</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['sanpham'] as $index => $item) : ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $item['ten'] ?></td>
                    <td><?= number_format($item['gia']) ?>
                    </td>
                    <td><?= $item['so_luong'] ?></td>
                    <td><img style="max-width:100px" class="img-thumbnail" src="<?= PUBLIC_URL ?>/img/<?= $item['hinh'] ?>" alt=""></td>

                    <td class="d-flex justify-content-around align-items-center">
                      <!-- <button type="button" class="btn btn-danger">Xóa</button>
                      <button type="button" class="btn btn-primary">Sửa</button> -->
                      <a href="" class="btn btn-primary">Sửa</a>
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
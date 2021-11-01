<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Loại sản phẩm</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Loại sản phẩm</li>
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
              <h3 class="card-title">Danh sách loại sản phẩm</h3>
              <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/admin/loaisanpham/create">Thêm</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Mã đơn hàng</th>
                  <th>Tên khách hàng</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Ngày đặt</th>
                  <th>Ngày giao</th>
                  <th>Giá</th>
                  <th>Trạng thái</th>
                  <th class="d-flex justify-content-around align-items-center">Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['loai'] as $index => $loai) : ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $loai['ten_loai'] ?></td>
                    

                    <td class="d-flex justify-content-around align-items-center">
                      <!-- <button type="button" class="btn btn-primary">Sửa</button> -->
                      <a href="<?= DOCUMENT_ROOT ?>/admin/loaisanpham/edit/<?= $loai['id'] ?>" class="btn btn-primary">Sửa</a>
                      <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $index ?>">Xóa</button> -->

                      <!-- <a href="<?= DOCUMENT_ROOT ?>/admin/sanpham/delete/<?= $item['id'] ?>" class="btn btn-danger">Xóa</a> -->
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
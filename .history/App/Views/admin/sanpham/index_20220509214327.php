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
              <h3 class="card-title">Danh sách sản phẩm</h3>
              <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/admin/sanpham/create">Thêm</a>
            </div>

          </div>
          <?php require_once(VIEW . DS . "admin/share/notification.php") ?>
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
                      <!-- <button type="button" class="btn btn-primary">Sửa</button> -->
                      <a href="<?= DOCUMENT_ROOT ?>/admin/sanpham/edit/<?= $item['id'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $index ?>"><i class="fas fa-trash-alt"></i> Xóa</button>

                      <!-- <a href="<?= DOCUMENT_ROOT ?>/admin/sanpham/delete/<?= $item['id'] ?>" class="btn btn-danger">Xóa</a> -->

                      <!-- Button trigger modal -->
                      <!-- <i type="button" class="fas fa-trash-alt" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $index ?>">

                      </i> -->

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<?= $index ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">

                            <div class="modal-body">
                              <strong> Bạn muốn xóa <?= $item['ten'] ?></strong>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                              <a href="<?= DOCUMENT_ROOT ?>/admin/sanpham/delete/<?= $item['id'] ?>" class="btn btn-danger">Xóa</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end modal -->
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
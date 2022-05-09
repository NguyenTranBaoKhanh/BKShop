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
          <?php require_once(VIEW . DS . "admin/share/notification.php") ?>

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
                    <td><?= $binhluan['tenkhachhang'] ?></td>
                    <td><?= $binhluan['tenhanghoa'] ?></td>
                    <td><?= $binhluan['noidung'] ?></td>
                    <td><?= $binhluan['ngaybinhluan'] ?></td>
                    <td class="d-flex justify-content-around align-items-center">
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $index ?>"><i class="fas fa-trash-alt"></i> Xóa</button>



                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<?= $index ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">

                            <div class="modal-body">
                              <strong> Bạn muốn xóa bình luận này?</strong>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                              <a href="<?= DOCUMENT_ROOT ?>/admin/binhluan/delete/<?= $binhluan['id'] ?>" class="btn btn-danger">Xóa</a>
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
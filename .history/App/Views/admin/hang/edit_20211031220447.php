<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">Cập nhật hãng</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="<?= DOCUMENT_ROOT ?>/admin/hang/update/<?= $data['hang']['id']?>" method="POST" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="tenloaisanpham">Tên loại sản phẩm</label>
            <input type="text" class="form-control" id="tenloaisanpham" name="tenloaisanpham" value="<?= $data['hang']['ten_hang']?>" required>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
  </form>
</div>
<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">Thêm loại sản phẩm</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="<?= DOCUMENT_ROOT ?>/admin/loaisanpham/store" method="POST" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <!-- select -->
          <div class="form-group">
            <label>Loại sản phẩm</label>
            <select name="loai" class="form-control">
              <option value="" disabled selected>Chọn loại</option>
              <?php foreach ($data['loai'] as $i => $loai) : ?>

                <option value="<?= $loai['id'] ?>"><?= $loai['ten_loai'] ?></option>

              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Hãng</label>
            <select name="hang" class="form-control">
              <option value="" disabled selected>Chọn hãng</option>
              <?php foreach ($data['hang'] as $i => $hang) : ?>

                <option value="<?= $hang['id'] ?>"><?= $hang['ten_hang'] ?></option>

              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="tensanpham">Tên sản phẩm</label>
            <input type="text" class="form-control" id="tensanpham" name="tensanpham" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="masanpham">Mã sản phẩm:</label>
            <input type="text" class="form-control" id="masanpham" name="masanpham" required>
          </div>
        </div>
      </div>
      
      
      
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
  </form>
</div>
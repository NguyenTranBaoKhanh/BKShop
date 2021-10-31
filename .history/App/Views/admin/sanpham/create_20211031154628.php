<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">Thêm sản phẩm</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <!-- select -->
          <div class="form-group">
            <label>Loại sản phẩm</label>
            <select class="form-control">
              <option value="" disabled selected>Select one</option>
              <?php foreach ($data['loai'] as $i => $loai) : ?>

                <option value="<?= $loai['id'] ?>"><?= $loai['ten_loai'] ?></option>

              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Hãng</label>
            <select class="form-control">
              <option value="" disabled selected>Select one</option>
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
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="dungluong">Dung lượng(Ví dụ: 6/64):</label>
            <input type="text" class="form-control" id="dungluong" name="dungluong" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="mau">Màu:</label>
            <input type="text" class="form-control" id="mau" name="mau" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="gia">Giá:</label>
            <input type="text" class="form-control" id="gia" name="gia" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="soluong">Số lượng:</label>
            <input type="text" class="form-control" id="soluong" name="soluong" required>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" rows="3" name="mota" placeholder="Enter ..."></textarea>
      </div>
      <div class="form-group">
        <label for="hinh">Hình</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="hinh" name="hinh">
            <label class="custom-file-label" for="hinh">Choose file</label>
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
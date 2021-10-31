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
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Hãng</label>
            <select class="form-control">
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="tensanpham">Tên sản phẩm</label>
        <input type="email" class="form-control" id="tensanpham" name="tensanpham" placeholder="Enter email" required>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="dungluong">Dung lượng(Ví dụ: 6/64):</label>
            <input type="email" class="form-control" id="dungluong" name="dungluong" placeholder="Enter email" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="mau">Màu:</label>
            <input type="email" class="form-control" id="mau" name="mau" placeholder="Enter email" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="gia">Giá:</label>
            <input type="email" class="form-control" id="gia" name="gia" placeholder="Enter email" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="soluong">Số lượng:</label>
            <input type="email" class="form-control" id="soluong" name="soluong" placeholder="Enter email">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Hình</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
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
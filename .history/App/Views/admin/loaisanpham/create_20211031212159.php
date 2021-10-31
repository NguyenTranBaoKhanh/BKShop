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
          <div class="form-group">
            <label for="tensanpham">Tên loại sản phẩm</label>
            <input type="text" class="form-control" id="tenloaisanpham" name="tenloaisanpham" required>
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
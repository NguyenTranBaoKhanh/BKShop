<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">Thêm hãng</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="<?= DOCUMENT_ROOT ?>/admin/hang/store" method="POST" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="tenhang">Tên hãng</label>
            <input type="text" class="form-control" id="tenhang" name="tenhang" required>
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
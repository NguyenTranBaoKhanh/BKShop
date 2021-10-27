<div class="wrapper bodymin">
  <div class="container">
    <h1 class="current-position1 ">GIỎ HÀNG</h1>
    <div class="table-responsive">
      <table class="table border border-success align-middle">
        <thead class="table-dark">
          <tr class="">
            <th scope="col">STT</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thành tiền</th>
          </tr>
        </thead>
        <tbody class="">
          <?php foreach ($data['item'] as $index => $item) : ?>
            <tr class="">
              <th scope="row"><?=$index + 1?></th>
              <td>
                <img src="<?=PUBLIC_URL?>/img/<?= $item['hinh'] ?>" alt="" class="cart-img">
                <span><?= $item['ten'] ?></span>
              </td>
              <input type="number" hidden id="itemPrice" value="">
              <td><?= number_format($item['gia'] * 0.95) ?>đ</td>
              <td>
                <span><?= $item['soluong'] ?></span>
              <td><?= number_format(($item['gia'] * 0.95) * $item['soluong']) ?>đ</td>
            </tr>
          <?php endforeach; ?>

          <tr>
            <th colspan="4" class="total-title text-end">Tổng tiền:</th>
            <td class="total-price ">90000000đ</td>
          </tr>
        </tbody>
        <!-- <p class="text-center fs-1">Giỏ hàng trống</p> -->
      </table>
    </div>
    <div class="text-center fs-1 name-form">Thanh toán</div>
    <form action="" method="get" class="d-flex frm">
      <div class="form-left">
        <div class="mb-3">
          <label for="hoten" class="form-label">Họ tên:</label>
          <input class="form-input" id="hoten" name="hoten" type="text" value="" required>
        </div>
        <div class="mb-3">
          <label for="sdt" class="form-label">Số điện thoại:</label>
          <input class="form-input" id="sdt" name="sdt" type="text" value="" required>
        </div>
        <div class="mb-3">
          <label for="diachi" class="form-label">Địa chỉ nhận hàng:</label>
          <input class="form-input" id="diachi" name="diachi" type="text" value="" required>
        </div>
      </div>
      <div class="form-right">
        <div class="d-flex justify-content-between mb-5 mt-5">
          <div class="total-title">Tổng số tiền: </div>
          <span class="fs-2">1000000đ</span>
        </div>

        <button type="submit" class="btn btn-lg btn-login">Đặt hàng</button>
      </div>

    </form>

  </div>
</div>
<div class="wrapper bodymin">
  <div class="container">
    <h1 class="current-position1 ">GIỎ HÀNG</h1>
    <div class="table-responsive">
      <table class="table border border-success align-middle">
        <thead class="table-dark">
          <tr class="">
            <th scope="col">STT</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col" class="text-center">Đơn giá</th>
            <th scope="col" class="text-center">Số lượng</th>
            <th scope="col" class="text-center">Thành tiền</th>
          </tr>
        </thead>
        <?php $total = 0 ?>
        <?php if (!empty($data['item'])) : ?>

          <tbody class="">

            <?php foreach ($data['item'] as $index => $item) : ?>
              <tr class="">
                <th scope="row"><?= $index + 1 ?></th>
                <td>
                  <img src="<?= PUBLIC_URL ?>/img/<?= $item['hinh'] ?>" alt="" class="cart-img">
                  <span><?= $item['ten'] ?></span>
                </td>
                <input type="number" hidden id="itemPrice" value="">
                <td class="text-center"><?= number_format($item['gia'] * 0.95) ?>đ</td>
                <td class="text-center">
                  <span><?= $item['soluong'] ?></span>
                <td class="text-center"><?= number_format(($item['gia'] * 0.95) * $item['soluong']) ?>đ</td>
              </tr>
              <?php $total = $total + ($item['gia'] * 0.95) * $item['soluong'] ?>

            <?php endforeach; ?>

          </tbody>
        <?php else : ?>
          <p class="text-center fs-1">Giỏ hàng trống!</p>
        <?php endif; ?>
        <!-- <p class="text-center fs-1">Giỏ hàng trống</p> -->
      </table>
    </div>
    <div class="text-center fs-1 name-form">Thanh toán</div>
    <form action="<?= DOCUMENT_ROOT ?>/cart/check_pay" method="POST" class="d-flex frm">
      <div class="form-left">
        <input hidden class="form-input" id="id" name="id" type="text" value="<?= $data['user']['id'] ?>" required>
        <div class="mb-3">
          <label for="hoten" class="form-label">Họ tên:</label>
          <input class="form-input" id="hoten" name="hoten" type="text" value="<?= $data['user']['ten'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="sdt" class="form-label">Số điện thoại:</label>
          <input class="form-input" id="sdt" name="sdt" type="text" value="<?= $data['user']['sdt'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="diachi" class="form-label">Địa chỉ nhận hàng:</label>
          <input class="form-input" id="diachi" name="diachi" type="text" value="<?= $data['user']['dia_chi'] ?>" required>
        </div>
      </div>
      <div class="form-right">
        <div class="d-flex justify-content-between mb-5 mt-5">
          <div class="total-title">Tổng số tiền: </div>
          <input hidden id="total" name="total" type="text" value="<?= $total ?>">
          <span class="fs-2"><?= number_format($total) ?>đ</span>
        </div>
        <button data-bs-toggle="modal" data-bs-target="#exampleModal_pay" type="button" class="btn btn-lg btn-login <?= $total == 0 ? "disabled" : "" ?>">Đặt hàng</button>

        <!-- Button trigger modal -->
        <i type="button" class="fas fa-trash-alt" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $index ?>">

        </i>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal_pay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
              </div>
              <div class="modal-body">
                <strong> Bạn muốn đặt hàng <?= $item['ten'] ?></strong>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-lg btn-danger">Đặt</button>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal -->

      </div>
    </form>
  </div>
</div>
<div class="wrapper">
  <div class="container">
    <h1 class="current-position1 ">GIỎ HÀNG</h1>
    <div class="table-responsive">
      <table class="table border border-success align-middle">
        <thead class="table-dark">
          <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thành tiền</th>
            <th scope="col">Thao tác</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php foreach ($data['item'] as $index => $item) : ?>

            <tr class="">
              <th scope="row">1</th>
              <td>
                <img src="./img/iphone-11-pro-trang.jpg" alt="" class="cart-img">
              </td>
              <td>30000000đ</td>
              <td>
                <i class="fas fa-minus"></i>
                <div class="cart-price">2</div>
                <i class="fas fa-plus"></i>
              </td>
              <td>60000000đ</td>
              <td>Xóa</td>
            </tr>
          <?php endforeach; ?>


          <tr>
            <th colspan="4" class="total-title">Tổng tiền:</th>
            <td class="total-price">90000000đ</td>
            <td class=""><button class="btn btn-success btn-lg col-8 total-pay">Thanh toán</button></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>
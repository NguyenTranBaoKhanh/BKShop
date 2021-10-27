<div class="wrapper">
  <div class="container">
    <h1 class="current-position1 ">GIỎ HÀNG</h1>
    <div class="table-responsive">
      <table class="table border border-success align-middle">
        <thead class="table-dark">
          <tr class="">
            <th scope="col">#</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thành tiền</th>
            <th scope="col">Thao tác</th>
          </tr>
        </thead>
        <tbody class="">
          <?php $total=0 ?>
          <?php foreach ($data['item'] as $index => $item) : ?>
            <tr class="">
              <th scope="row"><?=$index + 1?></th>
              <td>
                <img src="<?=PUBLIC_URL?>/img/<?=$item['hinh']?>" alt="" class="cart-img">
                <span><?=$item['ten']?></span>
              </td>
              <td><?=number_format($item['gia']*0.95)?>đ</td>
              <td>
                
                <input class="cart-amount" type="number" value="<?=$item['soluong']?>">
                
              </td>
              <td><?=number_format(($item['gia']*0.95) * $item['soluong'])?>đ</td>
              <td><button class="btn fs-4">Xóa</button></td>
            </tr>
            <?php $total = $total + ($item['gia']*0.95) * $item['soluong']?>
          <?php endforeach; ?>


          <tr>
            <th colspan="4" class="total-title">Tổng tiền:</th>
            <td class="total-price"><?=number_format($total)?>đ</td>
            <td class=""><button class="btn btn-success btn-lg col-8 total-pay">Thanh toán</button></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>
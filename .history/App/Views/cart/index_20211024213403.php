<div class="wrapper">
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
            <th scope="col" class="text-center">Thao tác</th>
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
              <input type="number" hidden id="itemPrice<?=$index?>" value="<?=$item['gia']*0.95?>">
              <td class="text-center"><?=number_format($item['gia']*0.95)?>đ</td>
              <td class="text-center">
                <input id="amount<?=$index?>" class="cart-amount" type="number" value="<?=$item['soluong']?>">
              </td>
              <td class="text-center"><?=number_format(($item['gia']*0.95) * $item['soluong'])?>đ</td>
              <td class="text-center"><button class="btn fs-4">Xóa</button></td>
            </tr>
            <?php $total = $total + ($item['gia']*0.95) * $item['soluong']?>
          <?php endforeach; ?>
          <tr>
            <th colspan="4" class="total-title text-end">Tổng tiền:</th>
            <td class="text-center"><input class="total-price" type="text"></td>
            <td  class="text-center"><button class="btn btn-success btn-lg col-8 total-pay">Thanh toán</button></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
  <script>
    function changeAmount(){

    }
  </script>
</div>
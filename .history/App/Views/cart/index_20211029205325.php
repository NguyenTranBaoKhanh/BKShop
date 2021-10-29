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
            <th scope="col" class="text-center">Thao tác</th>
          </tr>
        </thead>
        <?php if (!empty($data['item'])) : ?>
          <tbody class="">
            <?php $total = 0 ?>
            <?php foreach ($data['item'] as $index => $item) : ?>
              <tr class="">
                <th scope="row"><?= $index + 1 ?></th>
                <td>
                  <img src="<?= PUBLIC_URL ?>/img/<?= $item['hinh'] ?>" alt="" class="cart-img">
                  <span><?= $item['ten'] ?></span>
                </td>
                <input type="number" hidden id="itemPrice<?= $index ?>" value="<?= $item['gia'] * 0.95 ?>">
                <td class="text-center"><?= number_format($item['gia'] * 0.95) ?>đ</td>
                <td class="text-center">
                  <input onchange="changeAmount(), update(<?= $_SESSION['user']['id'] ?>,<?= $item['id'] ?>,amount<?= $index ?>), refreshNumInCart()" max=50 min=1 id="amount<?= $index ?>" class="cart-amount" type="number" value="<?= $item['soluong'] ?>">
                </td>
                <td id="current-price<?= $index ?>" class="text-center"><?= number_format(($item['gia'] * 0.95) * $item['soluong']) ?>đ</td>
                <td class="text-center">
                  <button class="btn btn-primary" onclick="deleteItem(<?= $_SESSION['user']['id'] ?>,<?= $item['id'] ?>)"> Xóa</button>
                  <!-- <a href="<?= DOCUMENT_ROOT ?>/cart/removecart/<?= $_SESSION['user']['id'] ?>/<?= $item['id'] ?>" class="fs-4">Xóa</a> -->
                </td>
              </tr>
              <?php $total = $total + ($item['gia'] * 0.95) * $item['soluong'] ?>
            <?php endforeach; ?>
            <tr>
              <th colspan="4" class="total-title text-end">Tổng tiền:</th>
              <td class="text-center"><span id="total" class="total-price"></span></td>
              <td class="text-center"><a href="<?= DOCUMENT_ROOT ?>/cart/pay/<?= $_SESSION['user']['id'] ?>"><button class="btn btn-success btn-lg col-8 total-pay">Thanh toán</button></a></td>
            </tr>
          </tbody>
        <?php else : ?>
          <p class="text-center fs-1">Giỏ hàng trống!</p>
        <?php endif; ?>
      </table>
    </div>

  </div>
  <script>
    function changeAmount() {
      var total = document.getElementById("total");
      var totalNumber = 0;
      if (total != undefined) {
        for (var i = 0; i < <?= count($data['item']) ?>; i++) {
          var amount = document.getElementById("amount" + i).value;
          var itemPrice = document.getElementById("itemPrice" + i).value;
          document.getElementById("current-price" + i).innerText = new Intl.NumberFormat().format(parseInt(amount) * parseInt(itemPrice)) + "đ";
          totalNumber += parseInt(amount) * parseInt(itemPrice);
        }
        // console.log("AAAA")
        total.innerText = new Intl.NumberFormat().format(totalNumber) + "đ";
      }
      return;
    }
    changeAmount();

    function update(id_khachhang, id_hanghoa, id_amount) {
      // var documentRoot = document.getElementById("documentRoot").innerHTML;
      // var amount = document.getElementById(id_amount);
      console.log(id_amount.value);
      console.log(id_khachhang);
      console.log(id_hanghoa);
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // console.log(this.responseText);
        }
      };
      xhttp.open(
        "GET", "<?= DOCUMENT_ROOT ?>/cart/changeamount?id_khachhang=" + id_khachhang + "&id_hanghoa=" + id_hanghoa + "&so_luong=" + id_amount.value,
        true
      );
      xhttp.send();
    }

    function deleteItem(id_user, id_hanghoa) {
      var check = confirm('Bạn chắc chắn muốn xóa sản phẩm này?');
      if (check == true) {
        // var documentRoot = document.getElementById("documentRootId").innerText;
        var xhttp = new XMLHttpRequest();
        // console.log(this.response);

        xhttp.open("GET", "<?= DOCUMENT_ROOT ?>/cart/removecart/" + id_user + "/" + id_hanghoa, true);
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {

            var reponse = this.responseText;

            if (reponse == true) {
              window.location.reload(false);
            } else {
              alert("Không thể xóa!");
            }
          }
        }

        xhttp.send();
      }
    }
  </script>
</div>
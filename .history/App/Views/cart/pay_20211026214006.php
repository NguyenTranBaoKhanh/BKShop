<div class="wrapper bodymin">
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
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="">
                            <th scope="row">1</th>
                            <td>
                                <img src="./img/iphone-11-pro-trang.jpg" alt="" class="cart-img">
                                <span>Iphone 11 pro max 6/128G aaaaaaaaa</span>
                            </td>
                            <input type="number" hidden id="itemPrice" value="">
                            <td>30000000đ</td>
                            <td>
                                <span>1</span>
                                <td>60000000đ</td>
                        </tr>


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
                    <div>
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
function addToCart(id_khachhang, id_hanghoa) {
    var documentRoot = document.getElementById("documentRoot").innerHTML;
    if (id_khachhang == 0) {
        launch_toast("Hãy đăng nhập!");
        return;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("demo").innerHTML = this.responseText;
            console.log(this.responseText);

            var response = JSON.parse(this.response);

            if (response.isSuccess == true) {
                document.getElementById("cartAmountId").innerText = response.amount;
                launch_toast("Đã thêm vào giỏ hàng!");
            } else {
                launch_toast("Thêm vào giỏ hàng thất bại!");
            }
        }
    };
    xhttp.open(
        "GET",
        `${documentRoot}/cart/addtocart?id_khachhang=${id_khachhang}&id_hanghoa=${id_hanghoa}`,
        true
    );
    xhttp.send();
}

function launch_toast(message) {
    var x = document.getElementById("toast");
    document.getElementById("desc").innerText = message;
    x.className = "show";
    setTimeout(function() {
        x.className = x.className.replace("show", "");
    }, 5000);
}
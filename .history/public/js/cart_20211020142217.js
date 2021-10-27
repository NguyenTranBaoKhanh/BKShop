function addToCart(userId, cakeId) {
    var documentRoot = document.getElementById("documentRoot").innerHTML;
    if (userId == 0) {
        launch_toast("Please login!!!");
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
                launch_toast("Add to cart successful");
            } else {
                launch_toast("Add to cart failed");
            }
        }
    };
    xhttp.open(
        "GET",
        `${documentRoot}/cart/addtocart?userId=${userId}&cakeId=${cakeId}`,
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
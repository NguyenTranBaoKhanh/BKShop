<div class="wrapper">
    <div class="container d-flex">
        <div class="area-form">
            <h1 class="name-form">ĐĂNG KÝ</h1>
            <form action="<?= DOCUMENT_ROOT ?>/account/check_register" class="" id="form1" method="post">
                <div class="mb-4 form-group">
                    <label for="hoten">Họ và tên:</label>
                    <input class="form-input" id="hoten" type="text" name="hoten" placeholder="" required>
                    <span class="form-message"></span>
                </div>
                <div class="mb-4 form-group">
                    <label for="diachi">Địa chỉ:</label>
                    <input class="form-input" id="diachi" type="text" name="diachi" placeholder="" required>
                    <span class="form-message"></span>
                </div>
                <div class="mb-4 form-group">
                    <label for="sdt">Số điện thoại:</label>
                    <input class="form-input" id="sdt" type="text" name="sdt" placeholder="" required>
                    <span class="form-message"></span>
                </div>
                <div class="mb-4 form-group">
                    <label for="taikhoan">Tên đăng nhập:</label>
                    <input class="form-input" id="taikhoan" type="text" name="taikhoan" onkeyup="checkUser()" placeholder="" required>
                    <span class="form-message"></span>
                    <p style="" class="form-message" id="checkUserMessage"></p>
                </div>
                <div class="mb-4 form-group">
                    <label for="matkhau">Mật khẩu:</label>
                    <input class="form-input" id="matkhau" type="password" name="matkhau" placeholder="" required>
                    <span class="form-message"></span>
                </div>
                <div class="mb-4 form-group">
                    <label for="re-matkhau">Nhập lại mật khẩu:</label>
                    <input class="form-input" id="re-matkhau" type="password" name="re-matkhau" placeholder="" required>
                    <span class="form-message"></span>
                </div>
                <button class="btn btn-lg btn-login" type="submit">ĐĂNG KÝ</button>
            </form>
            <div class="login-sub d-flex justify-content-between">
                <span>
                    <span>Đã có tài khoản?</span>
                    <a href="<?= DOCUMENT_ROOT ?>/account">(Đăng nhập)</a>
                </span>
            </div>
        </div>
    </div>
</div>
<script src="<?= PUBLIC_URL ?>/js/validator.js"></script>

<script>
    Validator({
        form: "#form1",
        formGroupSelecter: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#hoten'),
            Validator.isRequired('#diachi'),
            Validator.isRequired('#sdt'),
            Validator.isRequired('#taikhoan'),
            Validator.isRequired('#matkhau'),
            Validator.minLength('#matkhau', 3),
            Validator.isRequired('#re-matkhau'),
            Validator.isConfirm('#re-matkhau', function() {
                return document.querySelector('#form1 #matkhau').value;
            }, 'Mật khẩu nhập lại không chính xác'),
        ]
    });
</script>

<script>
    function checkUser() {

        var taikhoan = document.getElementById('taikhoan');
        console.log(taikhoan.value);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("demo").innerHTML = this.responseText;
                console.log(this.responseText);

                if (this.responseText === "false") {
                    document.getElementById('checkUserMessage').innerText = "Tài khoản đã tồn tại!";
                } else {
                    document.getElementById('checkUserMessage').innerHTML = "";
                }

                // if (taikhoan.value == "") {
                //     document.getElementById('checkUserMessage').innerHTML = "";
                // }
            }
        };
        xhttp.open("GET", "<?= DOCUMENT_ROOT ?>/account/checkUser?taikhoan=" + taikhoan.value, true);
        xhttp.send();
    }

    var form=document.getElementById('form1');
    form.onsubmit=function(e){
        e.preventDefault();
    }
</script>
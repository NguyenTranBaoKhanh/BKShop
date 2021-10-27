//Đối tượng
function Validator(options) {


    var selectorRules = {};
    //Hàm thực hiện validate
    function validate(inputElement, rule) {
        var errorMessage;
        //Lấy ra các rules của selector
        var rules = selectorRules[rule.selector];
        //Lặp qua từng rule va kiểm tra
        for (var i = 0; i < rules.length; i++) {
            errorMessage = rules[i](inputElement.value);
            if (errorMessage) break;
        }
        var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
        if (errorMessage) {
            errorElement.innerText = errorMessage;
            inputElement.parentElement.classList.add('invalid');
        } else {
            errorElement.innerText = '';
            inputElement.parentElement.classList.remove('invalid')

        }
    }

    //Lấy element của form cần validate
    var formElement = document.querySelector(options.form);
    if (formElement) {

        //Lặp qua mỗi rule và xủ lý(lắng nghe sự kiện blur, input, ...)
        options.rules.forEach(function(rule) {

            //Lưu lại các rule trong mỗi input
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test)
            } else {
                selectorRules[rule.selector] = [rule.test];
            }
            var inputElement = formElement.querySelector(rule.selector);
            if (inputElement) {
                //Xử lí trường hợp blur khỏi input
                inputElement.onblur = function() {
                        //value: inputElement.values
                        //test: rules.test
                        validate(inputElement, rule)
                    }
                    //Xử lí mỗi khi người dùng nhập vào input
                inputElement.oninput = function() {
                    var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
                    errorElement.innerText = '';
                    inputElement.parentElement.classList.remove('invalid')
                }
            }
        });
        // //Khi sumit form
        // formElement.onsubmit = function(e) {
        //     e.preventDefault();
        //     //Lặp qua từng rule và validate
        //     options.rules.forEach(function(rule) {
        //         var inputElement = formElement.querySelector(rule.selector);
        //         validate(inputElement, rule)

        //     });
        // }
    }
}


//Định nghĩa các rules
//Nguyên tắc của  các rule:
//1.Khi có lỗi: trả mesage lỗi
//2.Khi hợp lệ không trả ra gì cả(undefined)
Validator.isRequired = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
            return value.trim() ? undefined : message || 'Vui lòng nhập trường này'
        }
    }
};

Validator.isEmail = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || 'Trường này phải là email'
        }
    }
};

Validator.minLength = function(selector, min, message) {
    return {
        selector: selector,
        test: function(value) {
            return value.length >= min ? undefined : message || `Trường này tối thiểu ${min} kí tự`
        }
    }
};

Validator.isConfirm = function(selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function(value) {
            return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác'
        }
    }
};
// Cấu hình modal
var options = {
    backdrop: true,
    keyboard: true
};

var register = new bootstrap.Modal(document.getElementById('registerModal'), options);
var login = new bootstrap.Modal(document.getElementById('loginModal'), options);
var productDisplay = new bootstrap.Modal(document.getElementById('productDisplay'), options);

// Xử lý các sự kiện của modal
function resetModal(modalSelector) {
    $(modalSelector).on('show.bs.modal', function () {
        $(this).find('form').trigger('reset');
        $(this).find('.box-input div').text('');
    });
}

resetModal('#registerModal');
resetModal('#loginModal');

// Hiển thị modal khi click vào các nút liên quan
$('.product-display').on('click', function () {
    productDisplay.show();
});

$('.registerModal').on('click', function () {
    register.show();
    login.hide();
});

$('.loginModal').on('click', function () {
    login.show();
    register.hide();
});


// Xử lý submit form đăng ký
function handleFormSubmit(formSelector, url, successMessage, modalToHide, modalToShow) {
    $(formSelector).on('submit', function (e) {
        e.preventDefault();

        var data = $(this).serializeArray();
        var dataObject = {};

        data.forEach(function (item) {
            dataObject[item.name] = item.value;
        });

        $.ajax({
            url: url,
            method: 'POST',
            data: JSON.stringify(dataObject),
            contentType: 'application/json',
            success: function (response) {
                alert(successMessage);
                modalToHide.hide();
                if (modalToShow) modalToShow.show();
                if (url.includes('login')) {
                    localStorage.setItem('user', JSON.stringify(response.data ?? {}));
                    location.reload();
                }
            },
            error: function (error) {
                if (typeof error.responseJSON.message === 'string') {
                    alert(error.responseJSON.message);
                } else {
                    $.map(error.responseJSON.message, function (value, index) {
                        $(`.${index}Error`).text(value[0]);
                    });
                }
            }
        });
    });
}

handleFormSubmit('#registerForm', 'http://localhost:8000/api/register', 'Đăng ký thành công', register, login);
handleFormSubmit('#loginForm', 'http://localhost:8000/api/login', 'Đăng nhập thành công', login, null);

// Xử lý focus input để xóa text lỗi
$('.form-info input').on('focus', function () {
    $(this).next().text('');
});
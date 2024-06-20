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
<<<<<<< HEAD
resetModal('#registerModal');
resetModal('#loginModal');

=======

resetModal('#registerModal');
resetModal('#loginModal');

// Hiển thị modal khi click vào các nút liên quan
$('.product-display').on('click', function () {
    productDisplay.show();
});

>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
$('.registerModal').on('click', function () {
    register.show();
    login.hide();
});

$('.loginModal').on('click', function () {
    login.show();
    register.hide();
});


<<<<<<< HEAD
var products = $.ajax({
    url: 'database/products.json',
    method: 'GET',
    async: false,
}).responseJSON;

// Tìm kiếm dữ liệu theo id 
function getProductById(id,products) {
    var product = products.find(function (item) {
        return item.id == id;
    });
    return product;
}

var idProduct = '';
var productArray = [];
var outsan_product = products['outsan_product'];
var diapers_hygiene = products['diapers_hygiene'];
var milk_for_babie = products['milk_for_babie'];
productArray.push(outsan_product,diapers_hygiene,milk_for_babie);


$('.product-display').on('click', function () {
    idProduct = $(this).attr('id');
    productDisplay.show();    
});

$('#productDisplay').on('show.bs.modal', function (event) { // Được chạy khi modal sắp được show
    // concat la phuong thuc noi 2 mang lai voi nhau
    // apply là phương thức gọi hàm với 1 mảng các tham số
    var productArray = [].concat.apply([],Object.values(products));    
    var data = getProductById(idProduct,productArray) ?? [];
    var price = data.price ?? 0;
    price = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Đây là sử dụng regex để thêm dấu chấm vào giữa các số hàng nghìn của giá sản phẩm    
    $('#productDisplay').find('.modal-img-avatar').attr('src', data.img);
    $('#productDisplay').find('.modal-title').text(data.name);
    $('#productDisplay').find('.modal-product-right-price').text(price + 'đ');
    
    
})



=======
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
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
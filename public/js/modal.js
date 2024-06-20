/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/modal.js ***!
  \*******************************/
// Cấu hình modal
var options = {
  backdrop: true,
  keyboard: true
};
// Lấy data ở đường dẫn /storage/app/database/product.json
var products = $.ajax({
  url: 'database/products.json',
  method: 'GET',
  async: false
}).responseJSON;
var outsan_product = products['outsan_product'];
// console.log('--- products ---', );

// Tìm kiếm dữ liệu theo id 
function getProductById(id) {
  var product = outsan_product.find(function (item) {
    return item.id == id;
  });
  return product;
}
var data = {
  img: '',
  name: '',
  price: '',
  author: ''
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
$('.registerModal').on('click', function () {
  register.show();
  login.hide();
});
$('.loginModal').on('click', function () {
  login.show();
  register.hide();
});
var idProduct = '';
$('.product-display').on('click', function () {
  idProduct = $(this).attr('id');
  productDisplay.show();
});
$('#productDisplay').on('show.bs.modal', function (event) {
  var _data$price;
  // Được chạy khi modal sắp được show
  var data = getProductById(idProduct);
  var price = (_data$price = data.price) !== null && _data$price !== void 0 ? _data$price : 0;
  price = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Đây là sử dụng regex để thêm dấu chấm vào giữa các số hàng nghìn của giá sản phẩm
  // /\B(?=(\d{3})+(?!\d))/g là regex để tìm các chỗ không phải là word boundary (không phải là chữ số) và sau đó là 3 chữ số liên tiếp và không phải là chữ số

  $('#productDisplay').find('.modal-img-avatar').attr('src', data.img);
  $('#productDisplay').find('.modal-title').text(data.name);
  $('#productDisplay').find('.modal-product-right-price').text(price + 'đ');
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
      success: function success(response) {
        alert(successMessage);
        modalToHide.hide();
        if (modalToShow) modalToShow.show();
        if (url.includes('login')) {
          var _response$data;
          localStorage.setItem('user', JSON.stringify((_response$data = response.data) !== null && _response$data !== void 0 ? _response$data : {}));
          location.reload();
        }
      },
      error: function error(_error) {
        if (typeof _error.responseJSON.message === 'string') {
          alert(_error.responseJSON.message);
        } else {
          $.map(_error.responseJSON.message, function (value, index) {
            $(".".concat(index, "Error")).text(value[0]);
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
/******/ })()
;
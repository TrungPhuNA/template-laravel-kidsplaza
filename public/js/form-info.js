/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./resources/js/components/form-info.js ***!
  \**********************************************/
// $(document).ready(function () {
//     $('.form-info').find('input').on('focus', function () {
//         $(this).next().text('');
//     });

//     $('#registerForm').on('submit', function (e) {
//         e.preventDefault();
//         console.log('--- $(this) ---', $(this));

//         var data = $(this).serializeArray();
//         var dataObject = {};
//         data.forEach(function (item) {
//             dataObject[item.name] = item.value;
//         });
//         $.ajax({
//             url: 'http://localhost:8000/api/register',
//             method: 'POST',
//             data: JSON.stringify(dataObject),
//             contentType: 'application/json',
//             success: function (response) {
//                 alert('Đăng ký thành công');
//                 register.hide();
//                 return response;

//             },
//             error: function (error) {
//                 // console.log('--- DATA ---', register,login );
//                 // register.hide();
//                 // login.show();
//                 $.map(error.responseJSON.message, function (value, index) {
//                     $(`.${index}Error`).text(value[0]);

//                 })

//             }
//         });
//     });

//     $('#loginForm').on('submit', function (e) {
//         e.preventDefault();

//         var data = $(this).serializeArray();
//         var dataObject = {};
//         data.forEach(function (item) {
//             dataObject[item.name] = item.value;
//         });
//         $.ajax({
//             url: 'http://localhost:8000/api/login',
//             method: 'POST',
//             data: JSON.stringify(dataObject),
//             contentType: 'application/json',
//             success: function (response) {
//                 alert('Đăng nhập thành công');                
//                 login.hide();
//                 return response;

//             },
//             error: function (error) {
//                 if (typeof error.responseJSON.message === 'string') {
//                     alert(error.responseJSON.message);
//                 } else {
//                     $.map(error.responseJSON.message, function (value, index) {
//                         $(`.${index}Error`).text(value[0]);

//                     })
//                 }

//             }
//         });
//     });
// });
/******/ })()
;
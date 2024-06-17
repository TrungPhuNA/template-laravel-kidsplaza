/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/home/header.js ***!
  \*************************************/
$(document).ready(function () {
  var windowSize = $(window).width();
  if (windowSize < 765) {
    $('.lower-bar').removeClass('header-conven-owl-carousel owl-carousel owl-theme');
    $('.lower-bar-item').addClass('col-xs-2 col-sm-2');
  } else {
    setTimeout(function () {
      $('.lower-bar').find('.owl-item')[0].remove();
      $('.lower-bar').find('.owl-item').each(function () {
        if (!$(this).hasClass('owl-item')) {
          $(this).remove();
        }
      });
    }, 100);
    $('.lower-bar-item').removeClass('col-xs-2 col-sm-2');
    $('.lower-bar').addClass('header-conven-owl-carousel owl-carousel owl-theme');
    $('.header-conven-owl-carousel').owlCarousel({
      loop: false,
      items: 7,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class=\"bi bi-chevron-left\"></i>", "<i class=\"bi bi-chevron-right\"></i>"]
    });
  }

  // Laays du lieu tu localstorage
  var user = JSON.parse(localStorage.getItem('user'));
  console.log('--- DATA ---', user);
  if (user) {
    $('.header-button').addClass('d-none');
    $('.header-welcome').empty().append($('<div>', {
      "class": 'row align-items-center'
    }).append($('<div>', {
      "class": 'col border-end',
      style: 'font-size:12px;'
    }).html('Xin Chào, </br> <span class="text-bule204 fw-semibold">' + user.username + '</span>'), $('<div>', {
      "class": 'col d-flex gap-2'
    }).append($('<i>', {
      "class": 'bi bi-coin fs-3 text-warning'
    }), $('<div>', {
      "class": 'fw-semibold text-bule204',
      style: 'font-size:12px;'
    }).html('KiCoin </br>0'))));
    $('.header-col-right-check').empty().append($('<div>', {
      "class": 'row mx-1'
    }).append($('<div>', {
      "class": 'col bg-white text-center p-1 py-2 rounded-3 cup'
    }).append($('<i>', {
      "class": 'bi bi-person-fill fs-5 text-bule204'
    }), $('<div>', {
      "class": 'text-bule204',
      style: 'font-size:11px;'
    }).html('Thông tin tài khoản')), $('<div>', {
      "class": 'col bg-white text-center p-1 py-2 rounded-3 cup mx-2'
    }).append($('<i>', {
      "class": 'bi bi-geo-alt fs-5 text-bule204'
    }), $('<div>', {
      "class": 'text-bule204',
      style: 'font-size:11px;'
    }).html('Sổ </br> địa chỉ')), $('<div>', {
      "class": 'col bg-white text-center p-1 py-2 rounded-3 cup'
    }).append($('<i>', {
      "class": 'bi bi-check-circle-fill fs-5 text-bule204'
    }), $('<div>', {
      "class": 'text-bule204',
      style: 'font-size:11px;'
    }).html('Sản phẩm đã xem'))));
  }
});
/******/ })()
;
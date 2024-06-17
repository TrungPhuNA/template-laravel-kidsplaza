/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************************!*\
  !*** ./resources/js/home/outstan-category.js ***!
  \***********************************************/
$(document).ready(function () {
  var windowSize = $(window).width();
  if (windowSize < 768) {
    $('.list-category').removeClass('list-category-owl-carousel owl-carousel owl-theme');
    $('.category-item').addClass('col-xs-1');
  } else {
    $('.category-item').removeClass('col-xs-1');
    $('.list-category').addClass('list-category-owl-carousel owl-carousel owl-theme');
    $('.list-category-owl-carousel').owlCarousel({
      loop: false,
      autoWidth: true,
      margin: 35,
      nav: false,
      dots: false,
      responsive: {
        600: {
          items: 6
        },
        1000: {
          items: 7
        }
      }
    });
  }
});
/******/ })()
;
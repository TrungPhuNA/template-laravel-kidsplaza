/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/functions/initializeOwlCarousel.js":
/*!*********************************************************!*\
  !*** ./resources/js/functions/initializeOwlCarousel.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, exports) => {

var initializeOwlCarousel = function initializeOwlCarousel(selector, options) {
  $(selector).owlCarousel(options);
};
exports.initializeOwlCarousel = initializeOwlCarousel;

/***/ }),

/***/ "./resources/js/variable.js":
/*!**********************************!*\
  !*** ./resources/js/variable.js ***!
  \**********************************/
/***/ ((module) => {

var windowSize = $(window).width();
module.exports = {
  windowSize: windowSize
};

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/category/category.js ***!
  \*******************************************/
var _require = __webpack_require__(/*! ../variable.js */ "./resources/js/variable.js"),
  windowSize = _require.windowSize;
var _require2 = __webpack_require__(/*! ../functions/initializeOwlCarousel.js */ "./resources/js/functions/initializeOwlCarousel.js"),
  initializeOwlCarousel = _require2.initializeOwlCarousel;
if (windowSize > 768) {
  $('.outstan-brand-category').removeClass('outstan-brand-category-owl-carousel owl-carousel owl-theme');
  $('.list-category-page').removeClass('list-category-page-owl-carousel owl-carousel owl-theme');
} else {
  $('.category-item-page').removeClass('col col-xs-2 category-item');
  $('.list-category-page').addClass('list-category-page-owl-carousel owl-carousel owl-theme');
  initializeOwlCarousel('.list-category-page-owl-carousel', {
    loop: true,
    items: 4,
    margin: 15,
    nav: false,
    dots: false
  });
  $('.outstan-brand-category').addClass('outstan-brand-category-owl-carousel owl-carousel owl-theme');
  initializeOwlCarousel('.outstan-brand-category-owl-carousel', {
    loop: true,
    items: 5,
    margin: 35,
    nav: false,
    dots: false
  });
}
/******/ })()
;
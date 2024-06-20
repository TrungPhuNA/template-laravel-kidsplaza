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
/*!**********************************!*\
  !*** ./resources/js/carousel.js ***!
  \**********************************/
// Hàm khởi tạo carousel
var _require = __webpack_require__(/*! ./functions/initializeOwlCarousel.js */ "./resources/js/functions/initializeOwlCarousel.js"),
  initializeOwlCarousel = _require.initializeOwlCarousel;

// Cấu hình navText chung
var navText = ["\n    <div class=\"bg-white border rounded-5 py-1 px-2\">\n        <i class=\"bi bi-chevron-left\"></i>\n    </div>\n    ", "\n    <div class=\"bg-white border rounded-5 py-1 px-2\">\n        <i class=\"bi bi-chevron-right\"></i>\n    </div>    \n    "];

// Khởi tạo các carousels với các cấu hình khác nhau
initializeOwlCarousel('.product-detail-owl-carousel', {
  loop: false,
  items: 1,
  margin: 10,
  nav: true,
  dots: false,
  navText: navText
});
initializeOwlCarousel('.header-center-owl-carousel', {
  loop: true,
  items: 1,
  margin: 10,
  nav: true,
  dots: false,
  navText: navText
});
initializeOwlCarousel('.service-banner-owl-carousel', {
  loop: true,
  items: 3,
  center: true,
  margin: 15,
  nav: true,
  dots: false,
  navText: navText,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
});
initializeOwlCarousel('.outstan-brand-owl-carousel', {
  loop: false,
  items: 2,
  dots: false,
  autoWidth: true,
  margin: 35,
  nav: false
});
initializeOwlCarousel('.banner-home-owl-carousel', {
  loop: true,
  items: 1,
  margin: 10,
  nav: true,
  dots: false,
  navText: navText
});
initializeOwlCarousel('.frame-product-layout-owl-carousel', {
  loop: true,
  items: 7,
  margin: 45,
  nav: false,
  dots: false,
  responsive: {
    0: {
      items: 4
    },
    600: {
      items: 5
    },
    1000: {
      items: 7
    }
  }
});
initializeOwlCarousel('.useful-information-owl-carousel', {
  loop: false,
  items: 4,
  margin: 27,
  nav: true,
  dots: false,
  navText: navText,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
});
initializeOwlCarousel('.viewed-the-product-owl-carousel', {
  loop: true,
  margin: 15,
  nav: true,
  dots: false,
  navText: ["\n        <div class=\"bg-white border rounded-5 py-1 px-2\">\n            <i class=\"bi bi-chevron-left fs-5\"></i>\n        </div>\n        ", "\n        <div class=\"bg-white border rounded-5 py-1 px-2\">\n            <i class=\"bi bi-chevron-right fs-5\"></i>\n        </div>    \n        "],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
});
initializeOwlCarousel('.category-list-product-owl-carousel', {
  loop: true,
  items: 4,
  margin: 15,
  nav: true,
  dots: false,
  navText: ["\n        <div class=\"bg-white border rounded-5 py-1 px-2\">\n            <i class=\"bi bi-chevron-left fs-5\"></i>\n        </div>\n        ", "\n        <div class=\"bg-white border rounded-5 py-1 px-2\">\n            <i class=\"bi bi-chevron-right fs-5\"></i>\n        </div>    \n        "],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
});
initializeOwlCarousel('.navbar-top-banner-owl-carousel', {
  loop: true,
  items: 1,
  margin: 10,
  nav: false,
  dots: false
});
initializeOwlCarousel('.outstan-brand-sm-owl-carousel', {
  loop: true,
  items: 5,
  margin: 25,
  nav: false,
  dots: false
});
initializeOwlCarousel('.outstan-banner-sm-owl-carousel', {
  loop: true,
  items: 2,
  margin: 15,
  nav: false,
  dots: false
});
initializeOwlCarousel('.frame-product-layout-display-banner-owl-carousel', {
  loop: true,
  items: 1,
  margin: 15,
  nav: false,
  dots: false
});
/******/ })()
;
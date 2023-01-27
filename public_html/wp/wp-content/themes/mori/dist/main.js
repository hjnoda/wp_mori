/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/index.js":
/*!****************************!*\
  !*** ./assets/js/index.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _sass_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../sass/styles.scss */ \"./sass/styles.scss\");\n\n\n// nav scroll event\nwindow.addEventListener(\"DOMContentLoaded\", function () {\n  const gnb = document.querySelector(\".navbar\");\n  window.onscroll = function () {\n    if (window.pageYOffset > 0) {\n      gnb.classList.add(\"shadow\", \"is-scroll\");\n    } else {\n      gnb.classList.remove(\"shadow\", \"is-scroll\");\n    }\n  };\n});\n\n// PR swiper\nnew Swiper(\".prSwiper\", {\n  loop: true,\n  effect: \"fade\",\n  autoplay: {\n    delay: 4000,\n    disableOnInteraction: false,\n  },\n  speed: 2000,\n  pagination: {\n    el: \".swiper-pagination-pr\",\n    clickable: true,\n  },\n});\n\n// message swiper\nnew Swiper(\".messageSwiper\", {\n  direction: \"horizontal\",\n  loop: true,\n  autoHeight: false,\n  autoplay: true,\n  slidesPerView: 1,\n  centeredSlides: true,\n  spaceBetween: 30,\n  pagination: {\n    el: \".swiper-pagination-message\",\n  },\n  breakpoints: {\n    768: {\n      slidesPerView: 2,\n      spaceBetween: 30,\n    },\n    992: {\n      slidesPerView: 2,\n      spaceBetween: 100,\n    },\n  },\n});\n\n// news swiper\nnew Swiper(\".newsSwiper\", {\n  direction: \"horizontal\",\n  loop: true,\n  autoHeight: false,\n  centeredSlides: true,\n  autoplay: true,\n  slidesPerView: 1.3,\n  spaceBetween: 20,\n  pagination: {\n    el: \".swiper-pagination-news\",\n  },\n  breakpoints: {\n    992: {\n      slidesPerView: 3,\n      spaceBetween: 40,\n    },\n    1400: {\n      slidesPerView: 4,\n      spaceBetween: 40,\n    },\n  },\n});\n\n\n//# sourceURL=webpack://shimizu/./assets/js/index.js?");

/***/ }),

/***/ "./sass/styles.scss":
/*!**************************!*\
  !*** ./sass/styles.scss ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://shimizu/./sass/styles.scss?");

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
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/js/index.js");
/******/ 	
/******/ })()
;
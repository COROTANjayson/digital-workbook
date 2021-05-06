/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/popup.js":
/*!*******************************!*\
  !*** ./resources/js/popup.js ***!
  \*******************************/
/***/ (() => {

eval("// Get DOM Elements\nvar modal = document.querySelector('#my-modal');\nvar modalBtn = document.querySelector('#modal-btn');\nvar closeBtn = document.querySelector('.close'); // Events\n\nmodalBtn.addEventListener('click', openModal);\ncloseBtn.addEventListener('click', closeModal);\nwindow.addEventListener('click', outsideClick); // Open\n\nfunction openModal() {\n  modal.style.display = 'block';\n} // Close\n\n\nfunction closeModal() {\n  modal.style.display = 'none';\n} // Close If Outside Click\n\n\nfunction outsideClick(e) {\n  if (e.target == modal) {\n    modal.style.display = 'none';\n  }\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcG9wdXAuanM/ODUzMSJdLCJuYW1lcyI6WyJtb2RhbCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsIm1vZGFsQnRuIiwiY2xvc2VCdG4iLCJhZGRFdmVudExpc3RlbmVyIiwib3Blbk1vZGFsIiwiY2xvc2VNb2RhbCIsIndpbmRvdyIsIm91dHNpZGVDbGljayIsInN0eWxlIiwiZGlzcGxheSIsImUiLCJ0YXJnZXQiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0EsSUFBTUEsS0FBSyxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsV0FBdkIsQ0FBZDtBQUNBLElBQU1DLFFBQVEsR0FBR0YsUUFBUSxDQUFDQyxhQUFULENBQXVCLFlBQXZCLENBQWpCO0FBQ0EsSUFBTUUsUUFBUSxHQUFHSCxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsUUFBdkIsQ0FBakIsQyxDQUVBOztBQUNBQyxRQUFRLENBQUNFLGdCQUFULENBQTBCLE9BQTFCLEVBQW1DQyxTQUFuQztBQUNBRixRQUFRLENBQUNDLGdCQUFULENBQTBCLE9BQTFCLEVBQW1DRSxVQUFuQztBQUNBQyxNQUFNLENBQUNILGdCQUFQLENBQXdCLE9BQXhCLEVBQWlDSSxZQUFqQyxFLENBRUE7O0FBQ0EsU0FBU0gsU0FBVCxHQUFxQjtBQUNuQk4sRUFBQUEsS0FBSyxDQUFDVSxLQUFOLENBQVlDLE9BQVosR0FBc0IsT0FBdEI7QUFDRCxDLENBRUQ7OztBQUNBLFNBQVNKLFVBQVQsR0FBc0I7QUFDcEJQLEVBQUFBLEtBQUssQ0FBQ1UsS0FBTixDQUFZQyxPQUFaLEdBQXNCLE1BQXRCO0FBQ0QsQyxDQUVEOzs7QUFDQSxTQUFTRixZQUFULENBQXNCRyxDQUF0QixFQUF5QjtBQUN2QixNQUFJQSxDQUFDLENBQUNDLE1BQUYsSUFBWWIsS0FBaEIsRUFBdUI7QUFDckJBLElBQUFBLEtBQUssQ0FBQ1UsS0FBTixDQUFZQyxPQUFaLEdBQXNCLE1BQXRCO0FBQ0Q7QUFDRiIsInNvdXJjZXNDb250ZW50IjpbIi8vIEdldCBET00gRWxlbWVudHNcclxuY29uc3QgbW9kYWwgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjbXktbW9kYWwnKTtcclxuY29uc3QgbW9kYWxCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjbW9kYWwtYnRuJyk7XHJcbmNvbnN0IGNsb3NlQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmNsb3NlJyk7XHJcblxyXG4vLyBFdmVudHNcclxubW9kYWxCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBvcGVuTW9kYWwpO1xyXG5jbG9zZUJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGNsb3NlTW9kYWwpO1xyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBvdXRzaWRlQ2xpY2spO1xyXG5cclxuLy8gT3BlblxyXG5mdW5jdGlvbiBvcGVuTW9kYWwoKSB7XHJcbiAgbW9kYWwuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XHJcbn1cclxuXHJcbi8vIENsb3NlXHJcbmZ1bmN0aW9uIGNsb3NlTW9kYWwoKSB7XHJcbiAgbW9kYWwuc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxufVxyXG5cclxuLy8gQ2xvc2UgSWYgT3V0c2lkZSBDbGlja1xyXG5mdW5jdGlvbiBvdXRzaWRlQ2xpY2soZSkge1xyXG4gIGlmIChlLnRhcmdldCA9PSBtb2RhbCkge1xyXG4gICAgbW9kYWwuc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxuICB9XHJcbn1cclxuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wb3B1cC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/popup.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/popup.js"]();
/******/ 	
/******/ })()
;
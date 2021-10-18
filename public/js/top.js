/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/top.js ***!
  \*****************************/
window.onload = function () {
  var w_width = $(window).width();
  var r_width = w_width - 200;
  $('.py-12').css('width', r_width);
  var pageStatus = 2; //カラム数

  $('#sidebarToggler').click(function () {
    $('.sidebar').toggle();

    if (pageStatus == 2) {
      $('.page-wrapper').removeClass('d-flex');
      $('.py-12').css('width', w_width);
      pageStatus = 1;
    } else {
      $('.page-wrapper').addClass('d-flex');
      $('.py-12').css('width', r_width);
      pageStatus = 2;
    }
  });
};
/******/ })()
;
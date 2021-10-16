/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/eventadd-vue.js ***!
  \**************************************/
var user_id = $('#user_id').text();
var place_id = $('#place_id').text();
var tag_id_1 = $('#tag_id_1').text();
var tag_id_2 = $('#tag_id_2').text();
var tag_id_3 = $('#tag_id_3').text();
var tag_id_4 = $('#tag_id_4').text();
var tag_id_5 = $('#tag_id_5').text();
var title = $('#title').text();
var oview = $('#Overview').text();
var place_field = $('#place_field').text();
var url = $('#url').text();
var lat = $('#lat').text();

var _long = $('#long').text();

var date = $('#date').text();
var time = $('#time').text();
var video = $('#video').text();
var photo = $('#photo').text();
var b_title = new Vue({
  el: '#b_title',
  data: {
    message: title
  }
});
$("document").ready(function () {
  $("#b_video").simplePlayer();
});

if (video == 'none') {
  $('#b_video').hide();
}

var b_photo_false = true;

if (photo == 'null') {
  b_photo_false = false;
}

var b_photo = new Vue({
  data: {
    seen: b_photo_false
  }
});
$('.slider').slick({
  dots: true
});
/******/ })()
;
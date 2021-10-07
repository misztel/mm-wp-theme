import $ from 'jquery';
console.log('admin');

$(document).ready(function () {
  $('.controls#_themename-img-container li img').click(function () {
    $('.controls#_themename-img-container li').each(function () {
      $(this).find('img').removeClass('_themename-radio-img-selected');
    });
    $(this).addClass('_themename-radio-img-selected');
  });
});

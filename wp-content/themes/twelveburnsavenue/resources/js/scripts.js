window.jQuery = window.$ = require('jquery');
require('popper.js');
require('bootstrap');
import AOS from 'aos';
require('owl.carousel');
require('@fortawesome/fontawesome-free/js/all');

$(document).ready(function () {
  AOS.init();

  $('.synced-slide').owlCarousel({
    loop: true,
    items: 1,
    dots: false,
    URLhashListener: true,
    nav: false
  });

  $('.gallery-slider').owlCarousel({
    loop: true,
    margin: 50,
    items: 6,
    dots: false,
    center: false,
    URLhashListener: true,
    nav: false,
    responsive: {
      0 : {
        items: 3
      },
      992 : {
        items: 6
      }
    }
  });
});

$(window).scroll(() => {
  let y = $(window).scrollTop();
  if (y > 150 && $('#menu-wrapper-a').attr('display') !== 'none') {
    swapMenu();
  }
});

function swapMenu () {
  $('#menu-wrapper-a').css({'display': 'none'});
  $('#menu-wrapper-b').css({'display': 'block'});
  $('.slogan-wrapper .img-logo').css({'top': '0'});
  $('.slogan-wrapper .slogan').css({'opacity': '0'});
}

$('#open-menu').on('click', () => {
  swapMenu();
});

$('#back-to-top').on('click', e => {
  e.preventDefault();
  $('html, body').animate({scrollTop: 0}, '2000');
});

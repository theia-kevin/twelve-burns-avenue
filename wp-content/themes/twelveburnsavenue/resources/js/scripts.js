window.jQuery = window.$ = require('jquery');
require('popper.js');
require('bootstrap');
import AOS from 'aos';
import 'aos/dist/aos.css';

require('owl.carousel');
require('@fortawesome/fontawesome-free/js/all');
import { Loader } from '@googlemaps/js-api-loader';

$(document).ready(function () {
  AOS.init({
    offset: 0,
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 1000, // values from 0 to 3000, with step 50ms
  });

  $('.synced-slide').owlCarousel({
    loop: true,
    items: 1,
    dots: false,
    URLhashListener: true,
    nav: false
  });

  $('.gallery-slider').owlCarousel({
    loop: true,
    margin: 30,
    items: 6,
    dots: false,
    center: false,
    URLhashListener: true,
    nav: false,
    responsive: {
      0: {
        items: 3
      },
      992: {
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

let googleMapLoader = new Loader({
  apiKey: 'AIzaSyDp6zzKdaW3XaW2SZSp_IeOhxDslNolOAk',
  version: 'weekly'
}).load().then(() => {
  let coordinates = {lat: -36.792960, lng: 174.772180};
  let map = new google.maps.Map(document.getElementById('map'), {
    center: coordinates,
    zoom: 14,
    disableDefaultUI: true,
    styles: [
      {
        'featureType': 'landscape',
        'stylers': [
          {
            'color': '#ffffff'
          }
        ]
      },
      {
        'featureType': 'poi',
        'stylers': [
          {
            'visibility': 'off'
          }
        ]
      },
      {
        'featureType': 'road',
        'stylers': [
          {
            'color': '#eeedee'
          }
        ]
      },
      {
        'featureType': 'road',
        'elementType': 'labels.text.fill',
        'stylers': [
          {
            'color': '#7d7d7d'
          }
        ]
      },
      {
        'featureType': 'road',
        'elementType': 'labels.text.stroke',
        'stylers': [
          {
            'color': '#ffffff'
          }
        ]
      },
      {
        'featureType': 'transit',
        'stylers': [
          {
            'visibility': 'off'
          }
        ]
      },
      {
        'featureType': 'water',
        'stylers': [
          {
            'color': '#c8d8d5'
          }
        ]
      }
    ]
  });

  const marker = new google.maps.Marker({
    position: coordinates,
    map: map,
    icon: {
      url: encodeURI(metaData.root_url + `/wp-content/themes/twelveburnsavenue/resources/assets/images/Asset 23.png`),
      size: new google.maps.Size(718, 110),
      scaledSize: new google.maps.Size(388, 110),
      origin: new google.maps.Point(-330, 0),
    }
  });
});

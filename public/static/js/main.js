"use strict";

function _getRequireWildcardCache(nodeInterop) { if (typeof WeakMap !== "function") return null; var cacheBabelInterop = new WeakMap(); var cacheNodeInterop = new WeakMap(); return (_getRequireWildcardCache = function (nodeInterop) { return nodeInterop ? cacheNodeInterop : cacheBabelInterop; })(nodeInterop); }

function _interopRequireWildcard(obj, nodeInterop) { if (!nodeInterop && obj && obj.__esModule) { return obj; } if (obj === null || typeof obj !== "object" && typeof obj !== "function") { return { default: obj }; } var cache = _getRequireWildcardCache(nodeInterop); if (cache && cache.has(obj)) { return cache.get(obj); } var newObj = {}; var hasPropertyDescriptor = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var key in obj) { if (key !== "default" && Object.prototype.hasOwnProperty.call(obj, key)) { var desc = hasPropertyDescriptor ? Object.getOwnPropertyDescriptor(obj, key) : null; if (desc && (desc.get || desc.set)) { Object.defineProperty(newObj, key, desc); } else { newObj[key] = obj[key]; } } } newObj.default = obj; if (cache) { cache.set(obj, newObj); } return newObj; }

jQuery(document).ready(function () {
  svg4everybody({});
  jQuery(window).on('scroll', function () {
    if (jQuery(this).scrollTop() > 250) {
      jQuery("body").addClass('scroll');
    } else {
      jQuery("body").removeClass('scroll');
    }
  });

  if (jQuery(this).scrollTop() > 250) {
    jQuery("body").addClass('scroll');
  } else {
    jQuery("body").removeClass('scroll');
  }
}); //new WOW().init();
// forEach IE 11

if ('NodeList' in window && !NodeList.prototype.forEach) {
  console.info('polyfill for IE11');

  NodeList.prototype.forEach = function (callback, thisArg) {
    thisArg = thisArg || window;

    for (var i = 0; i < this.length; i++) {
      callback.call(thisArg, this[i], i, this);
    }
  };
} // closest IE 11


(function () {
  if (!Element.prototype.closest) {
    Element.prototype.closest = function (css) {
      var node = this;

      while (node) {
        if (node.matches(css)) return node;else node = node.parentElement;
      }

      return null;
    };
  }
})(); // matches IE 11


(function () {
  if (!Element.prototype.matches) {
    Element.prototype.matches = Element.prototype.matchesSelector || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector;
  }
})(); //Array.form IE 11


if (!Array.from) {
  Array.from = function (object) {
    'use strict';

    return [].slice.call(object);
  };
}

$('input[type=phone]').inputmask('+375 99 999 99 99');
jQuery('img.svg').each(function () {
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');
  jQuery.get(imgURL, function (data) {
    // Get the SVG tag, ignore the rest
    var $svg = jQuery(data).find('svg'); // Add replaced image's ID to the new SVG

    if (typeof imgID !== 'undefined') {
      $svg = $svg.attr('id', imgID);
    } // Add replaced image's classes to the new SVG


    if (typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass + ' replaced-svg');
    } // Remove any invalid XML tags as per http://validator.w3.org


    $svg = $svg.removeAttr('xmlns:a'); // Replace image with new SVG

    $img.replaceWith($svg);
  }, 'xml');
});
$(document).on('click', '.overlay', function (e) {
  e.preventDefault();
  $('.overlay').fadeOut();
  $('.nav__mobile').removeClass('open');
  $('.popup').removeClass('open');
  $('.popup__thanks').removeClass('open');
});
$(document).on('click', '.open__popup', function (e) {
  e.preventDefault();
  $('.nav__mobile').removeClass('open');
  $('.overlay').fadeIn();
  $('.popup' + $(this).attr('href')).addClass('open');
});
$(document).on('click', '.popup__close,.popup-form__close', function (e) {
  e.preventDefault();
  $('.overlay').fadeOut();
  $('.popup').removeClass('open');
  $('.popup__thanks').removeClass('open');
  $('body').removeClass('fixed');
});

(async () => {
  if ('loading' in HTMLImageElement.prototype) {
    const images = document.querySelectorAll("img[data-src]");
    images.forEach(img => {
      img.src = img.dataset.src;
    });
  } else {
    // Динамический импорт библиотеки LazySizes
    const lazySizesLib = await Promise.resolve().then(() => _interopRequireWildcard(require('/lazysizes.min.js'))); // Инициализация LazySizes (чтение data-src & class=lazyload)

    lazySizes.init(); // lazySizes применяется при обработке изображений, находящихся на странице.
  }
})();
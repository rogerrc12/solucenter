// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

// Place any jQuery/helper plugins in here.

$(document).ready(function(){
  /* =====================
      Slick Slider
=========================*/
  if (document.getElementById('mainSlider')) {
    $('#mainSlider').slick({
        accessibility: true,
        adaptiveHeight: true,
        autoplay: true,
        arrows: true
    });
  }

  if(document.getElementById('navegacion-productos')) {
    $('#navegacion-productos').twbsPagination({
      totalPages: $('article.productos section').toArray().length,
      startPage: 1,
      visiblePages: $('article.productos section').toArray().length + 1,
      initiateStartPageClick: true,
      href: false,
      hrefVariable: '{{number}}',
      first: 'Primero',
      prev: 'Anterior',
      next: 'Siguiente',
      last: 'Último',
      loop: false,
      onPageClick: (event, page) => {
        $('.page-active').removeClass('page-active');
        $('#page'+page).addClass('page-active');
      },

      // Clases
      paginationClass: 'pagination',
      nextClass: 'next',
      prevClass: 'prev',
      lastClass: 'last',
      firstClass: 'first',
      pageClass: 'page',
      activeClass: 'active',
      disabledClass: 'disabled'
    })
  }
});
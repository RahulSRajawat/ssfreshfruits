(function($) {
  "use strict";
/* =================================
===        STICKY HEADER        ====
=================================== */
jQuery(window).on('load', function() {  
  jQuery(".main-nav").sticky({ topSpacing: 0 });
});
/* =================================
===        SERVICE SLIDER       ====
=================================== */
function serviceslider() {
  jQuery("#service").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination : false,
      paginationSpeed : 400,
      items : 3,
      autoPlay : true,
      navigationText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ]
  });
}
serviceslider();
/* =================================
===       PORTFOLIO SLIDER      ====
=================================== */
function portfolioslider() {
  jQuery("#portfolio").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination : false,
      margin:30,
      paginationSpeed : 400,
      items : 4,
      autoPlay : true,
      navigationText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ]
  });
}
portfolioslider();
/* =================================
===      TESTIMONIAL SLIDER     ====
=================================== */
function testimonialslider() {
  jQuery("#bs-testimonial").owlCarousel({
      animateOut: 'slideOutDown',
      animateIn: 'flipInX',
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination : false,
      paginationSpeed : 400,
      items : 1,
      margin : 30,
      autoPlay : true,
      navigationText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ]
  });
}
testimonialslider();
/* =================================
===       CLIENTS SLIDER        ====
=================================== */
function newslider() {
  jQuery("#home-news").owlCarousel({
    items : 3,
    lazyLoad : true,
    pagination: false,
    autoPlay: true,
    autoPlay: 2000,
    navigation : true,
    autoPlay : true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        }
    },
    navigationText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ]
  });
}
newslider();
/* =================================
===       CLIENTS SLIDER        ====
=================================== */
function clientslider() {
  jQuery(".bs-client").owlCarousel({
    items : 6,
    lazyLoad : true,
    pagination: false,
    autoPlay: true,
    autoPlay: 2000,
    navigation : false,
    autoPlay : true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        }
    },
    navigationText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ]
  });
}
clientslider();
/* =================================
===      PORTFOLIO LIGHTBOX     ====
=================================== */
function portfolio() {
   jQuery('.portfolio-view').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });
}    
portfolio();
/* =================================
===      INTRO VIDEO BUTTON     ====
=================================== */
function introvideo() {
    jQuery('.btn-video').magnificPopup({
      disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
    });
}    
introvideo();
/* =================================
===         SCROLL TOP       ====
=================================== */
jQuery(".ta_upscr").hide(); 
function taupr() {
  jQuery(window).on('scroll', function() {
    if ($(this).scrollTop() > 500) {
        $('.ta_upscr').fadeIn();
    } else {
      $('.ta_upscr').fadeOut();
    }
  });   
  $('a.ta_upscr').on('click', function()  {
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
}    
taupr();
})(jQuery);
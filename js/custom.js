/**
* Template Name: Medis - Health and Medical Multipurpose eCommerce HTML Mobile Template 
* Version: 1.0
* Author: HidraTheme 
* Developed By: HidraTheme  
* Author URL: https://themeforest.net/user/hidratheme

NOTE: This is the custom js file for the template
**/

(function ($) {

  "use strict"; 
  
  $('.row.copyright').html('2021 <span>ManagerX</span>, All rights reserved.');
  
  /*=================== PRELOADER ===================*/
  $(window).on('load',function() { 
      $(".preloading").fadeOut("slow"); 
  });

  /*=================== RIGHT SIDENAV ===================*/
  $('#button-collapse-category').sideNav({
      menuWidth: 250, 
      edge: 'left',
      closeOnClick: true, 
      draggable: true, 
      onOpen: function(el) {}, 
      onClose: function(el) {}, 
    }
  );
  /*=================== LEFT SIDENAV ===================*/
  $('#button-collapse-account').sideNav({
      menuWidth: 250, 
      edge: 'right',
      closeOnClick: true, 
      draggable: true, 
      onOpen: function(el) {}, 
      onClose: function(el) {}, 
    }
  );


  /*=================== CAROUSEL SLIDER  ===================*/
  $('.carousel.carousel-slider').carousel({fullWidth: true},setTimeout(autoplay, 4500));
    function autoplay() {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 4500);
  }

  /*=================== QTY INPUT ===================*/
    $('<div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div>').insertAfter('.quantity input');
    $('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.on("click", function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.on("click", function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });

  /*=================== GALLERY FILTERING FUCTION  ===================*/
  $(".filter-button").on("click", function() {
      var value = $(this).attr('data-filter');
      
      if(value == "gallery-no-filter")
      {
          $('.gallery-img-box').removeClass("gallery-hidden");
      }
      else
      { 
          $(".gallery-img-box").not('.'+value).addClass("gallery-hidden");   
          $('.gallery-img-box').filter('.'+value).removeClass("gallery-hidden");
          
      }
  });

  $('.filter-gallery .filter-button').on("click", function() {
      $('.filter-gallery').find('.filter-button.active').removeClass('active');  
      $(this).addClass('active');
  });

  /*=================== MAGNIFICPOPUP GALLERY  ===================*/
  $(".gallery-list").magnificPopup({
          type: "image",
          removalDelay: 300 
      });

  /*======================= PROMO  =======================*/ 
   if($('#promo-item').length > 0){
      $("#promo-item").owlCarousel({
        dots: false,
        loop: true,
        autoplay: true,
        slideSpeed : 2000,
        margin: 0,
        responsiveClass: true,
        nav: false, 
           navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"], 
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          600: {
            items: 1,
           nav: false
          },
          1000: {
            items: 1,
            nav: false, 
            margin: 0
          }
        }
         
      });
    }

  // ======================= TESTIMONIAL  ======================= // 
   if($('#testimonial-item').length > 0){
      $("#testimonial-item").owlCarousel({
        dots: true,
        loop: true,
        autoplay: true,
        slideSpeed : 2000,
        margin: 0,
        responsiveClass: true,
        nav: false, 
           navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"], 
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          600: {
            items: 1,
           nav: false
          },
          1000: {
            items: 1,
            nav: false, 
            margin: 0
          }
        }
         
      });
    }

  /*=================== SLICK CAROUSEL FEATURED PRODUCT ===================*/
      $("#featured-product").slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });

  /*=================== SLICK CAROUSEL POPULER PRODUCT ===================*/
      $("#populer-product").slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });

  /*=================== SLICK CAROUSEL PRODUCT IMAGE ===================*/
      $("#product-image").slick({
      arrows: false,
      dots: true 
      });


})(jQuery);

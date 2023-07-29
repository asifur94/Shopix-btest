(function($) {
    "use strict";


    $(document).ready(function(){

      $('.search').on('click', function(){
        // $('.search_box').toggleClass('d-block');
        $('.search_box').slideToggle('slow');
      });

      $('.profile').on('click', function(){
        // $('.user_profile').toggleClass('d-block');
        $('.user_profile').slideToggle('slow');
      });
      
      $('.mobile_menu').on('click', function(){
        $('.site_mobile_menu').slideToggle('slow');
        
      });


    });


      $(".slider").owlCarousel({
        items: 1,
        loop:true,
        nav:true,
        navText: ["<i class='bi bi-arrow-left-short'></i>", "<i class='bi bi-arrow-right-short'></i>"],
        dots: true,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
            dots: false,
            nav: false
        },
        600:{
            items:1,
            nav: false
        },
        1000:{
            items:1,

        }
      }
      });

    

})($);
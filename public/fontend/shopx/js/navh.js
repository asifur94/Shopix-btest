$(".c1").on('click', function(e) {
   e.preventDefault();
   $(".one").fadeOut(function() {
     $(".two").fadeIn();
   });  
 });
 
 $(".c2").on('click', function(e) {
   e.preventDefault();
   $(".two").fadeOut(function() {
     $(".one").fadeIn();
   });  
 });
 

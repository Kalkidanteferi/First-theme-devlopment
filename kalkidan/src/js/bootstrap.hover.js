jQuery(document).ready(function ($){
    //hover dropdown menu
 $(function(){
 $(".dropdown").hover(
     function(){
         $('.dropdown-menu', this).stop(true , true).fadeIn("fast");
         $(this).toggleclass('open');
         $('b', this).toggleclass("caret caret-up");
     },
     function(){
         $('.dropdown-menu', this).stop(true , true). fadeOut("fast");
         $(this).toggleclass('open');
         $('b', this).toggleclass("caret caret-up");

     });
 });
});
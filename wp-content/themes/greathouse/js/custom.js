jQuery(document).ready(function(){
  
  
  

 //jQuery("ul#menu-menu-1 > li > ul.sub-menu > li").addClass("garrett");
 

var divs = jQuery("ul#menu-menu-1 > li > ul.sub-menu > li");
for(var i = 0; i < divs.length; i+=2) {
  divs.slice(i, i+2).wrapAll("<div class='menu_col'></div>");
}



  
  
  
  // New Arrivals
  
  jQuery('.new_arrival_slideshow').slick({
    prevArrow: ".prev",
    nextArrow: ".next",
    slidesToShow: 5,
    slidesToScroll: 5,
    responsive: [
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1
        
      }
    }
  ]
  });



}); // Document Ready
		
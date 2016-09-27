jQuery(document).ready(function(){
  
  
// This scans the list items on the desktop menu and add <div class="menu_col"></div> around every two items. This creates Four coulmns that will stack the items vertically 


var divs = jQuery("ul#menu-menu-1 > li > ul.sub-menu > li");
for(var i = 0; i < divs.length; i+=2) {
  divs.slice(i, i+2).wrapAll("<div class='menu_col'></div>");
}

// This adds a see all link inside the wordpress menu, without messing up the function up above

jQuery( "<a class='see_all_products' href='/shop'>See All Products</a>" ).insertBefore( ".menu_col:first-of-type" );
 

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
  
  
  
  
  // Cookie that displays a special offer to first time users 
  
  if($.cookie('popup') != 'seen'){
    $.cookie('popup', 'seen', { expires: 365, path: '/' }); // Set it to last a year, for example.
    jQuery(".overlay").delay(2000).fadeIn();
    jQuery('.overlay_close').click(function(e) // You are clicking the close button
        {
        jQuery('.overlay').fadeOut(); // Now the pop up is hiden.
    });
   };
  
  



}); // Document Ready
		
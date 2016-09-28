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
    $.cookie('popup', 'seen', { expires: 365, path: '/' }); 
    jQuery(".overlay").delay(2000).fadeIn();
    jQuery('.overlay_close').click(function(e)
        {
        jQuery('.overlay').fadeOut(); 
    });
   };
   
   
   // Fixed Mobile Menu 
   
   
   
   jQuery(window).scroll(function(){
  	
  	var sticky = jQuery('header, .header_special_deal, .mobile_dropdown_wrapper'),
  			
      	scroll = jQuery(window).scrollTop();

		if (scroll >= 41) sticky.addClass('fixed');

		else sticky.removeClass('fixed')
		 			
	
	});
	
	// Slidetoggle on mobile menu 
	
	jQuery('.mobile_dropdown_wrapper li.menu-item-has-children a').click(function(){
		
		jQuery(this).next('ul.sub-menu').slideToggle(200);
		jQuery(this).toggleClass('active');
		
		
		
	});
  
  



}); // Document Ready
		
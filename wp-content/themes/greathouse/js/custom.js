jQuery(document).ready(function(){
	

  
// Adds an inner wrapper div to the dekstop wordpress menu drop down, so it can scroll on small screens

jQuery( "ul#menu-menu-1 > li > ul.sub-menu" ).wrapInner( "<div class='inner_drown_wrapper'></div>");


// This scans the list items on the desktop menu and add <div class="menu_col"></div> around every two items. This creates Four coulmns that will stack the items vertically 


var divs = jQuery("ul#menu-menu-1 > li > ul.sub-menu > .inner_drown_wrapper > li");
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
   
   
   

var sticky = new Waypoint.Sticky({
  element: jQuery('.mobile_fixed_wrapper')[0]
})

	
	// Slidetoggle on mobile menu 
	
	jQuery('.mobile_dropdown_wrapper > li.menu-item-has-children > a').click(function(){
		
		jQuery(this).next('ul.sub-menu').slideToggle(200);
		jQuery(this).toggleClass('active');
		
		
		
	});
	
	
	// Click to Open Mobile Menu
	
	
	
	
	jQuery('.mobile_menu_wrapper').click(function(){
		
		jQuery('.mobile_dropdown_wrapper').slideToggle(200);
		jQuery(this).toggleClass('open');
		jQuery('.menu_bar').toggleClass('open');
		
	});
  
  



}); // Document Ready
		
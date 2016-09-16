jQuery(document).ready(function(){
  jQuery('.new_arrival_slideshow').slick({
    prevArrow: ".prev",
    nextArrow: ".next",
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1
        
      }
    }
  ]
  });
});
		
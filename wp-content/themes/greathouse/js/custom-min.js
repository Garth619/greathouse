jQuery(document).ready(function(){for(var e=jQuery("ul#menu-menu-1 > li > ul.sub-menu > li"),o=0;o<e.length;o+=2)e.slice(o,o+2).wrapAll("<div class='menu_col'></div>");jQuery("<a class='see_all_products' href='/shop'>See All Products</a>").insertBefore(".menu_col:first-of-type"),jQuery(".new_arrival_slideshow").slick({prevArrow:".prev",nextArrow:".next",slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1400,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:750,settings:{slidesToShow:1}}]}),"seen"!=$.cookie("popup")&&($.cookie("popup","seen",{expires:365,path:"/"}),jQuery(".overlay").delay(2e3).fadeIn(),jQuery(".overlay_close").click(function(e){jQuery(".overlay").fadeOut()})),jQuery(window).scroll(function(){var e=jQuery("header, .header_special_deal, .mobile_dropdown_wrapper"),o=jQuery(window).scrollTop();o>=41?e.addClass("fixed"):e.removeClass("fixed")}),jQuery(".mobile_dropdown_wrapper li.menu-item-has-children a").click(function(){jQuery(this).next("ul.sub-menu").slideToggle(200),jQuery(this).toggleClass("active")})});
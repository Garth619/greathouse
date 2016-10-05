if (!WOOSVI) {
    var WOOSVI = {};
} else {
    if (WOOSVI && typeof WOOSVI !== "object") {
        throw new Error("WOOSVI is not an Object type");
    }
}
WOOSVI.isLoaded = false;
WOOSVI.STARTS = function ($) {
    var $product_mainimg = $('a.woocommerce-main-image').html();
    var $form = $('.variations_form');
    var $container = $("div#woosvi_strap");
    var $product_variations = $form.data('product_variations');
    var $select_variation_size = $form.find('.variations select').length;
    var $imagesLoaded_verify = true;
    var $x = 0;
    var $variationAjax = false;
    /*PLUGINS DETECT*/
    var $woosvi_lightbox = (WOOSVIDATA.lightbox == '1') ? true : false;
    var $woosvi_lens = (WOOSVIDATA.lens == '1') ? true : false;
    var $hide_thumbs = (WOOSVIDATA.hide_thumbs == '1') ? true : false;
    var $loadLens = false;
    return{NAME: "Application initialize module", VERSION: 4.2, init: function () {
            this.loadInits();
        },
        loadInits: function () {

            if ($select_variation_size > 0) { //IS VARIABLE PRODUCT
                if ($product_variations) { //NOT RUNNING AJAX
                    //console.log("VARIATIONS");
                    WOOSVI.STARTS.variationChange();
                } else { //RUNNING AJAX OR OTHER
                    //console.log("AJAX VARIATIONS");
                    if (!$variationAjax)
                        WOOSVI.STARTS.variationAjax();
                    else
                        WOOSVI.STARTS.variationAjaxDedault();
                }

                if ($hide_thumbs)
                    $container.find('div#woosvithumbs').hide();

                WOOSVI.STARTS.variationReset();
            } else { //IS SINGLE PRODUCT
                //console.log("SINGLE PRODUCT");
                WOOSVI.STARTS.startSingleVariation();
            }

        },
        /*START SELECT ACTIONS*/
        variationChange: function () {

            var $trigger = true;
            $form.on('show_variation', function (event, $variation) {
                $trigger = false;
                if (typeof $variation == 'object' && Object.keys($variation.additional_images).length > 0) { //SE EXISTIREM VARIAÇÕES
                    var items = WOOSVI.STARTS.getImageItem($variation.additional_images);
                    $container.find('div#woosvimain').html('').prepend($(items).first().find('img').data('svisingle')); //CLEAR MAIN IMAGE PRESENT AND ISNERT NEW 

                    WOOSVI.STARTS.domConstruct(items, true); // INSERT IMAGES IN DOOM
                }
                return;
            });

            setTimeout(function () {
                if ($trigger) {
                    //console.log("NOT TRIGGERED");
                    WOOSVI.STARTS.startVariationsEmpty();
                }
            }, 150)
        },
        variationAjax: function () {
            var $trigger = true;
            $variationAjax = true; //PREVENTS AJAX DOM OF BEING LOADED AGAIN

            $(document).ajaxSend(function (event, jqxhr, settings) {
                if (settings.url.indexOf("wc-ajax=get_variation") >= 0) {
                    //console.log("TRIGGERED AJAX");
                    $container.find('div#woosvimain,div#woosvithumbs').empty();
                    $trigger = false;
                }
            }
            ).ajaxComplete(function (event, xhr, settings) {
                if (settings.url.indexOf("wc-ajax=get_variation") >= 0) {

                    //console.log("TRIGGERED AJAX COMPLETE");
                    var $variation = xhr.responseJSON;
                    var items = WOOSVI.STARTS.getImageItem($variation.additional_images);

                    //console.log($(items).first().find('img').data('svisingle'));

                    $container.find('div#woosvimain').prepend($(items).first().find('img').data('svisingle')); //INSERT MAIN PRODUCT IMAGE
                    WOOSVI.STARTS.domConstruct(items, true); // INSERT IMAGES IN DOOM

                    $trigger = true;

                    return;
                }
            });

            setTimeout(function () {
                if ($trigger) {
                    WOOSVI.STARTS.variationAjaxDedault();
                }
            }, 150)
        },
        variationAjaxDedault: function () {
            //console.log("NOT TRIGGERED AJAX");
            var items;
            $container.find('div#woosvimain').html('').append($product_mainimg); //INSERT MAIN PRODUCT IMAGE
            $.each(WOOSVIDATA.failsafe, function (i, v) {
                items += WOOSVI.STARTS.getImageItem(v.additional_images);
            });

            WOOSVI.STARTS.domConstruct(items); // INSERT IMAGES IN DOOM
        },
        variationReset: function () {
            $form.on('click', '.reset_variations', function (event, a) {
                $container.find('div#woosvimain,div#woosvithumbs').empty();
                WOOSVI.STARTS.loadInits();
            });
        },
        /*END SELECT ACTIONS*/

        /*INITIALIZE DOM CONSTRUCT*/
        startVariationsEmpty: function () {

            var items = WOOSVI.STARTS.getItems();
            $container.find('div#woosvimain').html('').append($product_mainimg); //INSERT MAIN PRODUCT IMAGE

            WOOSVI.STARTS.domConstruct(items); // INSERT IMAGES IN DOOM
        },
        startSingleVariation: function () {
            var items;
            $container.find('div#woosvimain').html('').append($product_mainimg); //INSERT MAIN PRODUCT IMAGE
            $.each(WOOSVIDATA.failsafe, function (i, v) {
                items += WOOSVI.STARTS.getImageItem(v.additional_images);
            });

            WOOSVI.STARTS.domConstruct(items); // INSERT IMAGES IN DOOM
        },
        /*END DOM CONSTRUCT*/
        /*IMAGE ACTIONS*/
        ActivateSwapImage: function () {
            $('ul.svithumbnails img').click(function (e) {
                WOOSVI.STARTS.initSwap(this);
            });
        },
        initSwap: function (v) {

            var image = new Image();

            var svisingle = $(v).data('svisingle');

            image.src = $(svisingle).attr("src");

            $('div#woosvimain').prepend('<div class="sviLoader_thumb"></div>');

            $(image).on("load", function () {
                $('div#woosvimain img').fadeOut('fast').remove();
                $('div#woosvimain').prepend($(svisingle).hide());
                $('div#woosvimain img').fadeIn('fast');
                $('div#woosvimain').find('.sviLoader_thumb').fadeOut().remove();

                $('div.sviLoader_thumb').remove();
                WOOSVI.STARTS.prettyPhoto(); //RE-ACTIVATE LIGTHGALLERY
                WOOSVI.STARTS.LoadLens();
            });

        },
        /*END IMAGE ACTIONS*/
        /*IMAGE BUILDERS*/
        getItems: function () {
            var items = '';
            $.each($product_variations, function (i, v) {
                items += WOOSVI.STARTS.getImageItem(v.additional_images);
            });
            return items;
        },
        getImageItem: function (additional_images) {
            var item = '';
            $.each(additional_images, function (i, ai) {
                item += '<li data-thumb="' + ai.thumb[0] + '" data-src="' + ai.single[0] + '">';
                item += '<div class="sviLoader_thumb"></div>';
                item += ai.img_thumb;
                item += '</li>';
            });
            return item;
        },
        loadImages: function (items) {
            var $size = $(items).size() - 1;
            $.each($(items), function ($loop, v) {

                var $classes = [''];
                if ($loop === 0 || $loop % WOOSVIDATA.columns === 0) {
                    $classes.push('first');
                }
                if (($loop + 1) % WOOSVIDATA.columns === 0) {
                    $classes.push('last');
                }
                if ($loop === $size)
                    $classes.push('last');
                $(v).addClass($classes.join(' '));
                $container.find('ul.svithumbnails').append($(v));
            });
        },
        imagesLoader: function ($hide_thumbs_action) {
            if (!$imagesLoaded_verify) //PREVENT MULTIPLE imagesLoaded() from running
                return;

            $imagesLoaded_verify = false;

            $container.imagesLoaded().progress(WOOSVI.STARTS.onProgress).done(function (instance) {

                $container.removeClass('svihidden');

                WOOSVI.STARTS.ActivateSwapImage(); //ACTIVATE IMAGE SWAP CLICK

                WOOSVI.STARTS.prettyPhoto(); //ACTIVATE LIGTHGALLERY
                WOOSVI.STARTS.LoadLens();

                $container.find('.sviLoader_thumb').fadeOut().remove();

                $imagesLoaded_verify = true;

                if ($hide_thumbs && $hide_thumbs_action) {
                    $container.find('div#woosvithumbs').slideDown();
                }

                //console.log("RUNNING", $imagesLoaded_verify);

            });
        },
        onProgress: function (imgLoad, image) {
            var $item = $(image.img).parent();
            $item.find('.sviLoader_thumb').fadeOut().remove();
        },
        domConstruct: function (items, $hide_thumbs_action) {
            var cols = ' columns-' + WOOSVIDATA.columns;
            if ($container.find('ul.svithumbnails li').length > 0)
                $container.find('ul.svithumbnails li').remove();
            else
                $container.find('div#woosvithumbs').prepend('<ul class="svithumbnails' + cols + '"></ul>');

            WOOSVI.STARTS.loadImages(items); // INSERT IMAGES IN DOOM

            WOOSVI.STARTS.imagesLoader($hide_thumbs_action); // FIRE ACTION WHEN READY
        },
        /*END IMAGE BUILDER*/
        /*PRETTY PHOTO*/
        prettyPhoto: function () {

            if (!$woosvi_lightbox) //IF LIGTHBOX NOT ACTIVE RETURN
                return;

            //console.log("RUNNING LIGHTBOX");

            $('div#woosvimain > img').on('click', function (e) {
                e.preventDefault();
                var click_url = $(this).attr('src');
                var click_title = $(this).attr('title');
                var api_images = [];
                var api_titles = [];

                $('div#woosvithumbs ul.svithumbnails li').each(function () {
                    var href = $(this).data('src');
                    api_images.push(href);
                    api_titles.push($(this).find('img').attr('title'));
                });

                if ($.isEmptyObject(api_images)) {
                    api_images.push(click_url);
                    api_titles.push(click_title);
                }

                $.prettyPhoto.open(api_images, api_titles);

                $('div.pp_gallery').find('img[src="' + click_url + '"]').parent().trigger('click');
            });
        },
        /*END PRETTY PHOTO*/
        /*LOAD LENS*/
        LoadLens: function () {

            if (!$woosvi_lens)
                return;

            if ($loadLens)
                return;

            $loadLens = true;

            $("div.sviZoomContainer").remove();

            //console.log("LENS RUNNING");

            var ez, lensoptions;
            var ezR = setInterval(function () {
                if ($("div.sviZoomContainer").length <= 0) {
                    ez = $("div#woosvimain .swiper-slide-active img, div#woosvimain>img");
                    lensoptions = {
                        sviZoomType: 'lens',
                        lensShape: 'round',
                        lensSize: 150,
                        cursor: 'pointer',
                        galleryActiveClass: 'active',
                        containLensZoom: true,
                        loadingIcon: true,
                    };

                    ez.ezPlus(lensoptions);
                    $loadLens = false;
                    clearInterval(ezR);
                }
            }, 500);

        },
        /*END LOAD LENS*/
    }
}(jQuery.noConflict());
jQuery(document).ready(function () {
    WOOSVI.STARTS.init();
});

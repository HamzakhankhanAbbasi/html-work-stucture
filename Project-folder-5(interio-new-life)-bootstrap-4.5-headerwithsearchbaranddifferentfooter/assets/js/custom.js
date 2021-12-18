// Full Screen Search Bar Js
function openSearchHero() {
	document.getElementById("FullScreenOverlay").style.display = "block";
}

function closeSearchHero() {
	document.getElementById("FullScreenOverlay").style.display = "none";
}
// Mobile Menu Js
$('.mobile-toggle').click(function(){
	$('.mobile-nav').toggleClass('active');
});

// Banner Dropdown Buttons Js
$('.drop-btn').click(function(){
    $('.drop-buttons').toggle();
})

// Index Section3 Slider JS
$('.index-sec3-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
// // testimonials Js
$('.testimonials-slider').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:true,
    navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
// // Before Slider Js
$('.before-slider').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:true,
    navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// Design Idea Slider Js
$('.idea-slider').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:true,
    navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

// Index Sec2 Slider Js
if ( $('.product__slider-main').length ) {
        var $slider = $('.product__slider-main')
            .on('init', function(slick) {
                $('.product__slider-main').fadeIn(1000);
            })
            .slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                infinite: true,
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    			nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
                lazyLoad: 'ondemand',
                autoplaySpeed: 3000,
                asNavFor: '.product__slider-thmb'
            });

    var $slider2 = $('.product__slider-thmb')
            .on('init', function(slick) {
                $('.product__slider-thmb').fadeIn(1000);
            })
            .slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                lazyLoad: 'ondemand',
                asNavFor: '.product__slider-main',
                dots: false,
                centerMode: false,
                focusOnSelect: true
            });

 //remove active class from all thumbnail slides
 $('.product__slider-thmb .slick-slide').removeClass('slick-active');

 //set active class to first thumbnail slides
 $('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');

 // On before slide change match active thumbnail to current slide
 $('.product__slider-main').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
 	var mySlideNumber = nextSlide;
 	$('.product__slider-thmb .slick-slide').removeClass('slick-active');
 	$('.product__slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');
});
   

    // slick slider options
var sliderOptions = {
    slidesToShow   : 1,
    slidesToScroll : 1,
    arrows         : false,
    fade           : true,
    autoplay       : true
}

    // slick slider options
var previewSliderOptions = {
    slidesToShow   : 1,
    slidesToScroll : 1,
    dots           : false,
    focusOnSelect  : true,
    centerMode     : true
}
}

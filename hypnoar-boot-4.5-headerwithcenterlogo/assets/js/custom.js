//responsive-navigation
$('.mobile-toggle').click(function(){
	$('.mobie-nav').toggleClass('active');
});
$('.therapySlider').owlCarousel({
    loop:true,
    dots: false,
    margin:30,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:4
        }
    }
})
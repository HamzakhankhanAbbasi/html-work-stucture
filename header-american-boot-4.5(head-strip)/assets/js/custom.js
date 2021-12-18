//Add Class Sticky On Scroll
    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 20) {
            $(".main-menu").removeClass("sticky");
            $(".navbar .navbar-brand img").attr("src", "assets/images/logo.png");
        } 
        else {
            $(".main-menu").addClass("sticky");
            $(".navbar .navbar-brand img").attr("src", "assets/images/logo.png");
        }
    });

// Mobile Menu Js
$('.mobile-toggle').click(function(){
	$('.mobile-menu').toggleClass('active');
});

// Index sec2 Slider Js
$('.index-sec2-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3,
            margin:15
        }
    }
})

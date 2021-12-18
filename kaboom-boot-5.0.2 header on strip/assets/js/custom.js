// NAVIGATION
initializeStellarNav(1, '#main-nav');
function initializeStellarNav(index, element) {
	$(element).stellarNav({
		breakpoint: 1024,
		position: 'left'
	});
}

// top bar dropdown fade in out
$('.toggleMenu').on('click', function() {
    if ($('.menu').css('opacity') == 0) {
        $('.menu').css('opacity', 1);
		$('.menu').css('z-index', 9999);
    }
    else {
        $('.menu').css('opacity', 0);
		$('.menu').css('z-index', -100);
    }
});

//mobile-toggle-2


// contest page timers
(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
    let birthday = "Dec 31, 2021 00:00:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function() {    
  
          let now = new Date().getTime(),
              distance = countDown - now;
            document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
  
        }, 0)
    }());
// contest page timers




$('.allDomains').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	dots: false,
	autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        },
		1200:{
            items:5
        },
		1600:{
            items:6
        },
		1900:{
            items:6
        }
    }
});

// full page searchbar
function openSearchHero() {
    document.getElementById("FullScreenOverlay").style.display = "block";
  }

  function closeSearchHero() {
    document.getElementById("FullScreenOverlay").style.display = "none";
  }

//   index- testimonial slider
var swiper = new Swiper(".clients-slider", {
	slidesPerView: 1,
	spaceBetween: 0,
	loop: true,
	autoplay: {
	    delay: 2000,
	    disableOnInteraction: true,
	},
	pagination: {
        el: ".clients-slider .swiper-pagination",
        dynamicBullets: false,
    },
    breakpoints: {
		0: {
			slidesPerView: 1,
		},
		576: {
			slidesPerView: 1,
		},
		1024: {
			slidesPerView: 1,
		},
	}
});

// services slider
var swiper = new Swiper(".services-slider", {
	slidesPerView: 1,
	spaceBetween: 0,
	loop: true,
	pagination: {
		el: ".services-slider .swiper-pagination",
		clickable: true,
		renderBullet: function (index, className) {
          return '<span class="' + className + '"> <img src="' + (testimonialClientImg[index].src) + '"></span>';
        },
	},
	autoplay: {
		delay: 8000,
		disableOnInteraction: false,
	},
});



//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', false);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});





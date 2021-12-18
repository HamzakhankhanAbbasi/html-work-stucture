// NAVIGATION
// initializeStellarNav(1, '#main-nav');
// function initializeStellarNav(index, element) {
// 	$(element).stellarNav({
// 		breakpoint: 1023,
// 		position: 'left'
// 	});
// }

//edit-profile-image-js
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

//CAT SLIDER 
var swiper = new Swiper(".catagory-slider", {
	slidesPerView: 6,
	spaceBetween: 25,
	loop:true,
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: ".catagory-slider-wrap .button-prev",
		prevEl: ".catagory-slider-wrap .button-next",
	},
	breakpoints: {
		320: {
			slidesPerView: 2,
		},
		575: {
			slidesPerView: 3,
		},
		767: {
			slidesPerView: 4,
		},
		1024: {
			slidesPerView: 6,
		},
	},
});

// ABOUT TOGGLE

$(".about-btn").click(function(){
  $(this).toggleClass("active");
});

var selector = '.method';
$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});
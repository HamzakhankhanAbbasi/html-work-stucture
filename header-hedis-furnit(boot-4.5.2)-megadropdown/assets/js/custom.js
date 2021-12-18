// Filter Dropdown JS
$( ".filter-dropbtn" ).click(function() {
    $(".show-hide").hide();
    $("."+ $(this).data("card")).toggleClass("show");
    // $( this ).closest(".flip-card").addClass( "do-flip" );
});

// StellarNavbar Js
        jQuery(document).ready(function($) {
            jQuery('.stellarnav').stellarNav({
                theme: 'light',
                breakpoint: 991,
                position: 'right',
                phoneBtn: '',
                locationBtn: ''
            });
        });

// Index Banner Slider
$('.index-banner-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText : ['<img src="assets/images/left.png">','<img src="assets/images/right.png">'],
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
})

// Testimonial Slider
$('.testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText : ['<img src="assets/images/test-left.png">','<img src="assets/images/test-right.png">'],
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
})

// PRODUCT DETAIL SLIDER
$('.product-detail-slider').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    dotsData:true,
    navText : ['<i class="fas fa-long-arrow-alt-left"></i>','<i class="fas fa-long-arrow-alt-right"></i>'],
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
var owl1 = $('.product-detail-slider');
$('.product-detail-slider .owl-dot').click(function() {
        owl1.trigger('to.owl.carousel', [$(this).index(), 1000]);
});

// Related Products Slider Js
$('.relatedProduct-slider').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    nav:true,
    navText : ['<i class="fas fa-long-arrow-alt-left"></i>','<i class="fas fa-long-arrow-alt-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
// CART SIDEBAR
const cartOpen = document.getElementById('cart-side-toggle');
const cartSidebar = document.getElementById('cart-sidebar');
const cartclose = document.getElementById('close-cart-sidebar');
const cartOverlay = document.querySelector('.card-sidebar-overlay');
cartOpen.addEventListener('click', function(){
  cartSidebar.classList.add('active');
  cartOverlay.classList.add('active');
});
cartclose.addEventListener('click', function(){
 cartSidebar.classList.remove('active');
 cartOverlay.classList.remove('active');
});
cartOverlay.addEventListener('click', function(){
 cartSidebar.classList.remove('active');
 cartOverlay.classList.remove('active');
});

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', true);
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
//PRODUCT Delivery Week INPUT
    $('.add').click(function () {
		if ($(this).prev().val() < 10) {
    	$(this).prev().val(+$(this).prev().val() + 1);
		}
});
$('.sub').click(function () {
		if ($(this).next().val() > 5) {
    	if ($(this).next().val() > 5) $(this).next().val(+$(this).next().val() - 1);
		}
});
$(document).ready(function(){

//     $('.week').prop('disabled', true);
//     $(document).on('click','.plus',function(){
//       $(this).siblings('.week').val(parseInt($(this).siblings('.week').val()) + 1 );
      
//       if ($(this).siblings('.week').val() == 10) {
//         $('.plus').prop('disabled', true);
//         }
//         else{
//             $('.plus').prop('disabled', false);
//         }
//   });
//     $(document).on('click','.minus',function(){
//       $(this).siblings('.week').val(parseInt($(this).siblings('.week').val()) - 1 );
//       if ($(this).siblings('.week').val() == 0) {
//         $(this).siblings('.week').val(5);
//         }
//     });
});

// CUSTOM STUDIO PAGE

// ******RIGHT SIDE
$('.case-options-wrap .case-option, .case-art-img-wrap .case-art-img, .case-color-wrap .case-color, .custom-text-box .text-style-box').on("click", function(){
    $(this).find('input').prop('checked', true); 
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
});

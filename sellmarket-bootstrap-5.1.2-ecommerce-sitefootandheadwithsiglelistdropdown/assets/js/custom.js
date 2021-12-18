// NAVIGATION
// initializeStellarNav(1, '#main-nav');
// function initializeStellarNav(index, element) {
// 	$(element).stellarNav({
// 		breakpoint: 1023,
// 		position: 'left'
// 	});
// }

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

// CAT-TOGGLE

$(".cat-list-items .list-item").click(function (e) {
    $(this).next().stop(true).slideToggle("active");
    $(".cat-list-items").toggleClass("padding-action");
});

// CAT IMG ROTATION 
$(".list-item").click(function(){
	$(this).find(".arrow-img").toggleClass("active");
  // $(".cat-list-items .arrow-img").find().toggleClass("active");
});

// VIEW COUNTRY

$(".select-location-box .view-more").click(function (e) {
    $(this).next().stop(true).slideToggle("active");
});

// CAT SIDE FILTER BAR

$(".cat-toggle-btn").click(function () {
	$(".cat-left-col").toggleClass("active");
	$('body').toggleClass("deactive");	
});

$(".cat-left-col .close-cross").click(function () {
	$(".cat-left-col").removeClass("active");
	$('body').removeClass("deactive");
});


/// SCROLL SIDE BAR REMOVE

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 3000) {
        //clearHeader, not clearheader - caps H
        $(".cat-left-col").removeClass("active");
    }
}); //missing );



// ADS SLIDER

var swiper = new Swiper(".ads-slider", {
	slidesPerView: 4,
	spaceBetween: 20,
	loop: true,
	navigation: {
		nextEl: ".detail-left-wrap .slide-mover .prev-btn",
		prevEl: ".detail-left-wrap .slide-mover .next-btn",
	},
	autoplay: {
		delay:3000,
	},
	breakpoints: {
		310: {
			slidesPerView: 1,
		},
		575: {
			slidesPerView: 2,
		},
		767: {
			slidesPerView: 3,
		},
		991: {
			slidesPerView: 3,
		},
		1025: {
			slidesPerView: 3,
		},
		1500: {
			slidesPerView: 4,
		},
	},
});


// PRODUCT DETAIL SLIDER

var swiper = new Swiper(".product-detail-slide-1", {
	spaceBetween: 10,
	slidesPerView: 4,
	loop: true,
	watchSlidesProgress: true,
	navigation: {
		nextEl: ".mini-slide-wrap .prev-btn",
		prevEl: ".mini-slide-wrap .next-btn",
	},
});
var swiper2 = new Swiper(".product-detail-slide-2", {
	spaceBetween: 10,
	loop: true,
	thumbs: {
		swiper: swiper,
	},
});

 // DATA TABLE


var selectors = '.myinput';
$('#mytable').on('change', selectors, function(event) {
  var $this = $(event.currentTarget),
    $row = $this.closest('tr'),
    $elements = $row.find(selectors);
  var $filledElements = $elements.filter(function(index) {
    return $(this).val() || this.checked;
  });

  var hasEmpty = $filledElements.length !== $elements.length
  var rowIndex = $row.index();
  $('#results').append("Row:" + rowIndex + " has " + $filledElements.length + ' of ' + $elements.length + ' and shows ' + hasEmpty + '<br />');
  if (hasEmpty)
    console.log('some value is missing');
  else {
    console.log('valide');
    // do something with values
  }
});


// Drag And Drop Js
var dropFileForm = document.getElementById("dropFileForm");
var fileLabelText = document.getElementById("fileLabelText");
var uploadStatus = document.getElementById("uploadStatus");
var fileInput = document.getElementById("fileInput");
var droppedFiles;

function overrideDefault(event) {
  event.preventDefault();
  event.stopPropagation();
}

function fileHover() {
  dropFileForm.classList.add("fileHover");
}

function fileHoverEnd() {
  dropFileForm.classList.remove("fileHover");
}

function addFiles(event) {
  droppedFiles = event.target.files || event.dataTransfer.files;
  showFiles(droppedFiles);
}
function showFiles(files) {
  if (files.length > 1) {
    fileLabelText.innerText = files.length + " files selected";
  } else {
    fileLabelText.innerText = files[0].name;
  }
}
function uploadFiles(event) {
  event.preventDefault();
  changeStatus("Uploading...");

  var formData = new FormData();

  for (var i = 0, file; (file = droppedFiles[i]); i++) {
    formData.append(fileInput.name, file, file.name);
  }

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(data) {
    //handle server response and change status of
    //upload process via changeStatus(text)
    console.log(xhr.response);
  };
  xhr.open(dropFileForm.method, dropFileForm.action, true);
  xhr.send(formData);
}

function changeStatus(text) {
  uploadStatus.innerText = text;
}
// End



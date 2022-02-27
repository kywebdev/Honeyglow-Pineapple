$(window).on('load', function() {

	// remove the preloader
    setTimeout(function() {
		$('body').addClass('done-loading');
	}, 1000);

});

$(document).ready(function() {

    // back to top smooth scrolling
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': 0 + $target.offset().top
        }, 900, 'swing', function() {});
    });
	
	// open the search field
	$('.search button').on('click', function() {
		$('.search').toggleClass('search-open');
		$('#search').focus();

		if ($(window).width() >= 500) {  
			$('#searchModal').modal('hide');
		}
		if ($(window).width() < 500) {
			$('#searchModal').modal('show');
		}
	});

	// change how the navigation shows on scroll
	if (!$('body').hasClass('recipe-details')) {
		$(function() {
			var lastScrollTop = 0;
			var delta = 5;
	
			$(window).scroll(function(event) {
				var st = $(this).scrollTop();
	
				if (Math.abs(lastScrollTop - st) <= delta)
					return;
	
				if (st > lastScrollTop) {
					$('header').addClass('nav-small');
				} else {
					$('header').removeClass('nav-small');
				}
				lastScrollTop = st;
			});
		});
	}

	// show the full nav when the more link is clicked
	$('.show-nav a').on('click', function(e) {
		e.preventDefault();
		$('header').removeClass('nav-small');
	});

	// when we say sweet marquee
	function sweetMarquee() {
		// Variables
		// Play with this value to change the speed
		let tickerSpeed = -3;

		let flickity = null;
		let isPaused = false;
		const slideshowEl = document.querySelector('.sweet-marquee.js-slideshow');

		// Functions
		const update = () => {
			if (isPaused) return;
			if (flickity.slides) {
				flickity.x = (flickity.x + tickerSpeed) % flickity.slideableWidth;
				flickity.selectedIndex = flickity.dragEndRestingSelect();
				flickity.updateSelectedSlide();
				flickity.settle(flickity.x);
			}
			window.requestAnimationFrame(update);
		};

		const pause = () => {
			isPaused = true;
		};

		const play = () => {
			if (isPaused) {
				isPaused = false;
				window.requestAnimationFrame(update);
			}
		};

		// Create Flickity
		flickity = new Flickity(slideshowEl, {
			autoPlay: false,
			prevNextButtons: false,
			pageDots: false,
			draggable: false,
			wrapAround: true,
			cellAlign: 'left',
			imagesLoaded: true
		});
		flickity.x = 0;

		flickity.on('dragStart', () => {
			isPaused = true;
		});

		// Start Ticker
		update();
	}
	if ($('.sweet-marquee.js-slideshow').length > 0) {
		sweetMarquee();
	}

	// promotions marquee
	function promotionsMarquee() {
		// Variables
		// Play with this value to change the speed
		let tickerSpeed = -3;

		let flickity = null;
		let isPaused = false;
		const slideshowEl = document.querySelector('.promos-marquee.js-slideshow');

		// Functions
		const update = () => {
			if (isPaused) return;
			if (flickity.slides) {
				flickity.x = (flickity.x + tickerSpeed) % flickity.slideableWidth;
				flickity.selectedIndex = flickity.dragEndRestingSelect();
				flickity.updateSelectedSlide();
				flickity.settle(flickity.x);
			}
			window.requestAnimationFrame(update);
		};

		const pause = () => {
			isPaused = true;
		};

		const play = () => {
			if (isPaused) {
				isPaused = false;
				window.requestAnimationFrame(update);
			}
		};

		// Create Flickity
		flickity = new Flickity(slideshowEl, {
			autoPlay: false,
			prevNextButtons: false,
			pageDots: false,
			draggable: false,
			wrapAround: true,
			cellAlign: 'left',
			imagesLoaded: true
		});
		flickity.x = 0;

		flickity.on('dragStart', () => {
			isPaused = true;
		});

		// Start Ticker
		update();
	}
	if ($('.promos-marquee.js-slideshow').length > 0) {
		promotionsMarquee();
	}

	// visit instagram marquee
	function visitInstagramMarquee() {
		// Variables
		// Play with this value to change the speed
		let tickerSpeed = -3;

		let flickity = null;
		let isPaused = false;
		const slideshowEl = document.querySelector('.visit-instagram-marquee.js-slideshow');

		// Functions
		const update = () => {
			if (isPaused) return;
			if (flickity.slides) {
				flickity.x = (flickity.x + tickerSpeed) % flickity.slideableWidth;
				flickity.selectedIndex = flickity.dragEndRestingSelect();
				flickity.updateSelectedSlide();
				flickity.settle(flickity.x);
			}
			window.requestAnimationFrame(update);
		};

		const pause = () => {
			isPaused = true;
		};

		const play = () => {
			if (isPaused) {
				isPaused = false;
				window.requestAnimationFrame(update);
			}
		};

		// Create Flickity
		flickity = new Flickity(slideshowEl, {
			autoPlay: false,
			prevNextButtons: false,
			pageDots: false,
			draggable: false,
			wrapAround: true,
			cellAlign: 'left',
			imagesLoaded: true
		});
		flickity.x = 0;

		flickity.on('dragStart', () => {
			isPaused = true;
		});

		// Start Ticker
		update();
	}
	if ($('.visit-instagram-marquee.js-slideshow').length > 0) {
		visitInstagramMarquee();
	}

	// instagram image marquee
	function instagramImageMarquee() {
		// Variables
		// Play with this value to change the speed
		let tickerSpeed = 1;

		let flickity = null;
		let isPaused = false;
		const slideshowEl = document.querySelector('.instagram-marquee.js-slideshow');

		// Functions
		const update = () => {
			if (isPaused) return;
			if (flickity.slides) {
				flickity.x = (flickity.x - tickerSpeed) % flickity.slideableWidth;
				flickity.selectedIndex = flickity.dragEndRestingSelect();
				flickity.updateSelectedSlide();
				flickity.settle(flickity.x);
			}
			window.requestAnimationFrame(update);
		};

		const pause = () => {
			isPaused = true;
		};

		const play = () => {
			if (isPaused) {
				isPaused = false;
				window.requestAnimationFrame(update);
			}
		};

		// Create Flickity
		flickity = new Flickity(slideshowEl, {
			autoPlay: false,
			prevNextButtons: false,
			pageDots: false,
			draggable: false,
			wrapAround: true,
			cellAlign: 'left',
			imagesLoaded: true
		});
		flickity.x = 0;

		// Add Event Listeners
		slideshowEl.addEventListener('mouseenter', pause, false);
		slideshowEl.addEventListener('focusin', pause, false);
		slideshowEl.addEventListener('mouseleave', play, false);
		slideshowEl.addEventListener('focusout', play, false);

		flickity.on('dragStart', () => {
			isPaused = true;
		});

		// Start Ticker
		update();
	}
	if ($('.instagram-marquee.js-slideshow').length > 0) {
		instagramImageMarquee();
	}

	// toggle the mobile nav
	$('.mobile-nav-toggle').on('click', function(e) {
		e.preventDefault();
		$('body').toggleClass('nav-open');
	});
	
	// recipes slider
	var mySwiper = new Swiper('.recipes-slider', {
		loop: false,
		initialSlide: 1,
		centeredSlides: true,
		slidesPerView: 1,
		speed: 500,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			1000: {
				slidesPerView: 3
			}
		}
	});
	
	// add margin to the bottom of recipes slider
	function calculateRecipeSliderHeight(width) {
		if (width <= 335) {
            setTimeout(function() {
				var hexHeight = $('.recipes-slider .hex img').height();
				var totalHeight = hexHeight * 1.4;
				$('.recipes-slider').css('height', totalHeight);
			}, 500);
        } else if (width <= 585) {
            setTimeout(function() {
				var hexHeight = $('.recipes-slider .hex img').height();
				var totalHeight = hexHeight * 1.3;
				$('.recipes-slider').css('height', totalHeight);
			}, 500);
		} else if (width <= 985) {
            setTimeout(function() {
				var hexHeight = $('.recipes-slider .hex img').height();
				var totalHeight = hexHeight * 1.2;
				$('.recipes-slider').css('height', totalHeight);
			}, 500);
        } else {
            setTimeout(function() {
				var hexHeight = $('.recipes-slider .hex img').height();
				var totalHeight = hexHeight * 1.15;
				$('.recipes-slider').css('height', totalHeight);
			}, 500);
        }
    }
    calculateRecipeSliderHeight( $(window).width() );
    $(window).on('resize', function() {
        calculateRecipeSliderHeight( $(this).width() );
	});

	// promotions slider
	/*var mySwiper = new Swiper('.promo-slider', {
		loop: true,
		slidesPerView: 1,
		speed: 500,
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true,
		}
	});*/

	// when the download button is clicked, hide the coupon modal and show the form modal
	$('.download-btn .btn-yellow').on('click', function() {
		$('#couponModal').modal('hide');
		$('#couponModal').on('hidden.bs.modal', function () {
			$('#formModal').modal('show');
		});
	});

	// show the form modal if the URL has #form on it
	var hash = window.location.hash;
	if (hash == "#promoform") {
		$('#formModal').modal('show');
	}

	// show the homepage modal
	//$('#promoModal').modal('show');

	// change nav theme after scrolling past the hero on pages that start with a yellow background
	if ($('.yellow-hero').length) {
		$(window).on('scroll', function() {
			if (isScrolledIntoView($('.yellow-hero .hero'))) {
				$('body').addClass('alt-nav');
			} else {
				$('body').removeClass('alt-nav');
			}
		});
		function isScrolledIntoView(elem) {
			var docViewTop = $(window).scrollTop();
			var docViewBottom = docViewTop + $(window).height();
			var elemTop = $(elem).offset().top;
			var elemHeight = $(elem).height();
			var elemTrigger = elemTop + (elemHeight)
			return ((elemTrigger <= docViewBottom) && (elemTrigger >= docViewTop));
		}
	}
	
	// recipe video
    $('#recipe-video .video__poster').on('click', function() {
		$(this).fadeOut();
	});

	//change the header color depends on different pages
	var locationPath = window.location.href;
	if(locationPath.includes('promotions') || locationPath.includes('contact')) {
		$('.header-section').addClass('black-bg');
	}

	// button animation
	var animateButton = function(e) {

		e.preventDefault;
		//reset animation
		e.target.classList.remove('animate');
		
		e.target.classList.add('animate');
		setTimeout(function() {
		  e.target.classList.remove('animate');
		}, 700);
	};
	  
	var bubblyButtons = document.getElementsByClassName("bubbly-button");
	
	for (var i = 0; i < bubblyButtons.length; i++) {
		bubblyButtons[i].addEventListener('click', animateButton, false);
	}

});
(function ($) {
	
	//mobile menu
	jQuery('.main-menu').meanmenu({
		meanScreenWidth: 991
	});

	$('#datepicker').datepicker({
		autoclose: true,
		format: 'dd-mm-yyyy',
		todayBtn: 'linked',
    });
	
	//StickyHeader
	function stickyHeader() {
		var strickyScrollPos = $('#strickymenu').next().offset().top;
		if ($('#strickymenu').length) {
			if ($(window).scrollTop() > strickyScrollPos) {
				$('#strickymenu').addClass('sticky');
				$('body').addClass('sticky');
			} else if ($(window).scrollTop() <= strickyScrollPos) {
				$('#strickymenu').removeClass('sticky');
				$('body').removeClass('sticky');
			}
		};
	}
	$(window).on('scroll', function () {
			stickyHeader();
		});
	
	//Search
	$(".input-search").hide();
	$(".search-button").click(function () {
		$(".input-search").toggle()
	});
	
	//Slider
		$('.slide-carousel').owlCarousel({
			loop: true,
			autoplay: true,
			autoplayHoverPause: true,
			margin: 0,
			mouseDrag: false,
			animateIn: 'fadeIn',
			animateOut: 'fadeOut',
			nav: true,
			navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});
	
		$('.slide-carousel').on('translate.owl.carousel', function () {
            $('.slider-animated h2').removeClass('fadeInDown animated').hide();
            $('.slider-animated p').removeClass('fadeInUp animated').hide();
            $('.slider-animated li').removeClass('fadeInUp animated').hide();
        });

        $('.slide-carousel').on('translated.owl.carousel', function () {
            $('.slider-animated h2').addClass('fadeInDown animated').show();
            $('.slider-animated p').addClass('fadeInUp animated').show();
            $('.slider-animated li').addClass('fadeInUp animated').show();
        });
	
	//Team 
	$('.team-carousel').owlCarousel({
		loop: false,
		autoplay: true,
		autoplayHoverPause: true,
		margin: 30,
		nav: true,
		navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			520: {
				items: 2
			},
			750: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	});
	
	//Testimonial
	$('.testimonial-carousel').owlCarousel({
		loop: false,
		autoplay: true,
		autoplayHoverPause: true,
		margin: 30,
		nav: false,
		navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			640: {
				items: 2
			},
			750: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});
	
	//Blog
	$('.blog-carousel').owlCarousel({
		loop: false,
		autoplay: true,
		autoplayHoverPause: true,
		margin: 30,
		nav: true,
		navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			640: {
				items: 2
			},
			750: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});
	
	//customers
	$('.customers-carousel').owlCarousel({
		loop: false,
		autoplay: true,
		autoplayHoverPause: true,
		margin: 30,
		nav: true,
		navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		responsive: {
			0: {
				items: 2
			},
			520: {
				items: 3
			},
			750: {
				items: 4
			},
			1000: {
				items: 5
			}
		}
	});
	
	//Single Page
	$('.single-carousel').owlCarousel({
		loop: false,
		autoplay: true,
		autoplayHoverPause: true,
		margin: 15,
		nav: true,
		navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		responsive: {
			0: {
				items: 3
			},
			520: {
				items: 5
			},
			750: {
				items: 6
			},
			1000: {
				items: 7
			}
		}
	});
	
	 //Scroll-Top
	    $(".scroll-top").hide();
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 300) {
	            $(".scroll-top").fadeIn();
	        } else {
	            $(".scroll-top").fadeOut();
	        }
	    });
	    $(".scroll-top").click(function () {
	        $("html, body").animate({
	            scrollTop: 0,
	        }, 550)
	    });

	$(window).load(function () {
		$('#preloader').fadeOut();
		$('#preloader-status').delay(200).fadeOut('slow');
		$('body').delay(200).css({
			'overflow-x': 'hidden'
		});
	});
	
	//Filtr-Gallery
	$('.filtr-container').filterizr();
	
	// Counter
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	
})(jQuery);


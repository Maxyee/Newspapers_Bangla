(function ($) {
	"use strict";
 
    jQuery(document).ready(function($){


        $(document).ready(function(){

		    $(window).scroll(function(){
		        if ($(this).scrollTop() > 100) {
		            $('.scrollToTop').fadeIn();
		        } else {
		            $('.scrollToTop').fadeOut();
		        }
		    });

		    //Click event to scroll to top
		    $('.scrollToTop').on('click', function(){
		        $('html, body').animate({scrollTop : 0},800);
		        return false;
		    });

		    $(document).ready(function(){
				$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
					event.preventDefault(); 
					event.stopPropagation(); 
					$(this).parent().siblings().removeClass('open');
					$(this).parent().toggleClass('open');
				});
			});


		$(".slider_news").owlCarousel({
		    dots: false,
			autoplay: true,
			margin: 15,
			loop: true,
			nav: true,
			navText: [
				"<i class='fa fa-angle-left'></i>",
				"<i class='fa fa-angle-right'></i>"
			],
		    responsiveClass: true,
		    responsive: {
		        0:{
		          items: 1
		        },
		        480:{
		          items: 2
		        },
		        768:{
		          items: 4 
		        },
		        800:{
		          items: 5
		        }
		    }
		});
		$(".video_slider_sec").owlCarousel({
		    dots: false,
			autoplay: false,
			margin: 15,
			loop: true,
			nav: true,
			navText: [
				"<i class='fa fa-angle-left'></i>",
				"<i class='fa fa-angle-right'></i>"
			],
		    responsiveClass: true,
		    responsive: {
		        0:{
		          items: 2
		        },
		        480:{
		          items: 2
		        },
		        768:{
		          items:3 
		        },
		        800:{
		          items: 4
		        }
		    }
		});


		});

    });


    jQuery(window).load(function(){

        
    });


}(jQuery));
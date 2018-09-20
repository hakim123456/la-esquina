﻿(function($) {
	"use strict"; // Start of use strict
	


  /*RSVP Form*/
  $(".lec_form").validate({
	  submitHandler: function(form) {
	  	var type = $(form).attr('id');
	    send_form(type);
		return false;
	  }
 	});
	
	function send_form(type){
		var arr = [];
		$("#"+type+" .form-control").each(function(){
			
			var element = $(this).attr('name');
			var value = $(this).val();
			$(this).css({border:"1px solid #c4c4c4"});
			if($(this).prop('required') && value =="") {
				$(this).css({border:"2px solid red"});
				$(this).focus();
				return false;
			}
			arr.push("'&"+element+"=' + "+value);
		})
		

		var dataString = (arr.join (' + '));

		$.ajax({
			method: "POST",
			url: "http://formspree.io/rodalermakov@gmail.com",
			data: dataString,
			dataType: "json",
			success: function() {
				$("#"+type).html("<div id='form_send_message'>Thank you for your request, we will contact you as soon as possible.</div>", 1500);	
			}
		});
	}

	// Modernizr
	Modernizr.addTest('retina', function() {
	    var dpr = window.devicePixelRatio ||
	        (window.screen.deviceXDPI / window.screen.logicalXDPI) ||
	        1;
	    return !!(dpr > 1);
	});

  /*Gallery Lightbox*/
	$('.lightbox').magnificPopup({ 
	  type: 'image',
	  gallery:{
	    enabled:true
	  }
	});
	$('.video').magnificPopup({
	  type: 'iframe',
	  iframe: {
		  markup: '<div class="mfp-iframe-scaler">'+
		            '<div class="mfp-close"></div>'+
		            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
		          '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

		  patterns: {
		    youtube: {
		      index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

		      id: 'v=', // String that splits URL in a two parts, second part should be %id%
		      // Or null - full URL will be returned
		      // Or a function that should return %id%, for example:
		      // id: function(url) { return 'parsed id'; } 

		      src: 'http://www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
		    },
		    vimeo: {
		      index: 'vimeo.com/',
		      id: '/',
		      src: 'http://player.vimeo.com/video/%id%?autoplay=1'
		    },
		    gmaps: {
		      index: '//maps.google.',
		      src: '%id%&output=embed'
		    }

		    // you may add here more sources

		  },

		  srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
		}  
	  
	});

	// Firefly
	var firefly = $('.lec_slider_firefly');
	if( firefly.length > 0 ) {
		firefly.each(function(){
			var min = $(this).attr('data-min');
			var max = $(this).attr('data-max');
			var total = $(this).attr('data-total');
			$.firefly({
				color: 'none',
				minPixel: min,
				maxPixel: max,
				total : total,
				on: '.lec_slider_firefly'
			});
		})
	}

	// OWL Carousel in Gallery
	$(".lec_slider_single .lec_lm_type_i_item").each(function(){
		var title = $(this).find('.lec_gold').text();
		$(this).parents('.lec_section').find('.lec_slider_single_btns').append('<div class="lec_slider_single_btn">'+title+'</div>');
	});

	$(".lec_slider_single").each(function(){
		var dots = $(this).data('dots');
		var autoplay = $(this).data('autoplay');
		$(this).owlCarousel({
			stagePadding: 100,
	 		addClassActive:true,
			autoplay : autoplay,
			loop:true,
			touchDrag:true,
			center:true,
			singleItem:true,
			items:1,
			responsiveRefreshRate: 200,
			responsive : {
			    0 : {
			        stagePadding: 0,
							margin:0,
							center:false,
			    },
			    768 : {
			        stagePadding: 0,
							margin:0,
							center:false,
			    },
			    980 : {

			    }
			},
			margin:60,
	        nav: true,
	        navText:['',''],
	        dots : dots, 
	 		dotsContainer: '.lec_slider_single_btns',
		});
	});

	// Lettering
	if( !device.tablet() && !device.mobile() ) {
		$(".lec_gold").lettering();
		$('.lec_gold span').each(function(){
			var letter = $(this).html();
			$(this).addClass('lec_letter_'+letter);
		});
	}	

	var main_menu_icon = $(".lec_main_menu_icon b");
	main_menu_icon.lettering();
	main_menu_icon.each(function(){
	 	var i = 2;	
	 	$(this).find('span').each(function(){
			$(this).css('transition-delay','0.'+i+'s');
			i++;
		})
	 });


	// Reviews Slider
	$(".lec_reviews_single").owlCarousel({
 		addClassActive:true,
		autoplay : false,
		loop:true,
		touchDrag:true,
		center:true,
		singleItem:true,
		items:1,
		responsiveRefreshRate: 200,
		responsive : {
	    0 : {
	        items:1,
	        stagePadding: 0,
					margin:0,
	    },
	    768 : {
	        items:1,
	        stagePadding: 0,
					margin:0,
	    },
	    980 : {
	    		items:1,
	    }
		},
		stagePadding: 100,
		margin:60,
    nav: true,
    dots: false,
    navText:['',''],
    autoHeight : true,
	});


	// Team Slider
	$(".lec_team_slider").owlCarousel({
		addClassActive:true,
		autoplay : false,
		loop:true,
		touchDrag:true,
		items:3,
		responsiveRefreshRate: 200,
		responsive : {
	    0 : {
	        items:1,
	    },
	    768 : {
	        items:2,
	    },
	    980 : {
	        items:3,
	    }
		},
		margin:40,
    nav: false,
    navText:['',''],
    dots : true,
	});
	
	
	


	/* Section Background */
	var image_back = $('.lec_image_bck');
	image_back.each(function(){
		var image = $(this).attr('data-image');
		var gradient = $(this).attr('data-gradient');
		var color = $(this).attr('data-color');
		var blend = $(this).attr('data-blend');
		var opacity = $(this).attr('data-opacity');
		var position = $(this).attr('data-position');
		var height = $(this).attr('data-height');
		if (image){
			$(this).css('background-image', 'url('+image+')');	
		}
		if (gradient){
			$(this).css('background-image', gradient);	
		}
		if (color){
			$(this).css('background-color', color);	
		}
		if (blend){
			$(this).css('background-blend-mode', blend);	
		}
		if (position){
			$(this).css('background-position', position);	
		}
		if (opacity){
			$(this).css('opacity', opacity);	
		}
		if (height){
			$(this).css('height', height);	
		}

	});



	/* Over */
	$('.lec_over, .lec_head_bck').each(function(){
		var color = $(this).attr('data-color');
		var image = $(this).attr('data-image');
		var opacity = $(this).attr('data-opacity');
		var blend = $(this).attr('data-blend');
		if (color){
			$(this).css('background-color', color);	
		}
		if (image){
			$(this).css('background-image', 'url('+image+')');	
		}
		if (opacity){
			$(this).css('opacity', opacity);	
		}
		if (blend){
			$(this).css('mix-blend-mode', blend);	
		}
	});

	/* Map */
	$('.lec_map_over').on("click", function(e){
		$(this).parents('.lec_section').toggleClass('active_map');
	});
	
	$('.lec_map_container').on("click", function(e){
		$(this).addClass('clicked');
	}).on("mouseleave", function(e){
		$(this).removeClass('clicked');
	});

	/* Submenu */
 	$('.menu-item-has-children').on({
		mouseenter:function(){
			$(this).find('ul').addClass('active');
		},mouseleave:function(){
			$(this).find('ul').removeClass('active');
		}
	});

	/* Top Menu Click to Section */
	$('.lec_default_menu a[href*=\\#]:not([href=\\#])').on("click", function(){
		
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    }
	});


	/* Video */
	var virtual_play = $('.lec_virtual_play');
	var virtual_close = $('.lec_virtual_close');
	virtual_play.on("click", function(e){
		$(this).parents('.lec_animation_block').siblings('.lec_animation_block').toggleClass('active');
		$(this).toggleClass('active');
		virtual_close.fadeIn();
	});
	virtual_close.on("click", function(e){
		$(this).parents('.lec_animation_block').siblings('.lec_animation_block').toggleClass('active');
		virtual_play.toggleClass('active');
		$(this).fadeOut();
	});


	/* Mobile Menu */
	$('.lec_main_menu').on("click", function(e){
		$(this).next('.lec_main_menu_content').toggleClass('active');
		$(this).next().next('.lec_main_menu_content_menu').toggleClass('active');
		$(this).toggleClass('active');
	});





	/*Scroll Effect*/
	$('.lec_go').on("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 300);
		e.preventDefault();
	});

	/*Animation Block Delay*/
	
	$('div[data-animation=animation_blocks]').each(function(){
	var i = 0;	
		$(this).find('.lec_icon_box, .skill-bar-content, .lec_anim_box').each(function(){
			$(this).css('transition-delay','0.'+i+'s');
			i++;
		})
	})


	/* Bootstrap */
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover();

	/* Anchor Scroll */
	var body = $('body');
	var logo = $(".lec_logo");
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			logo.addClass('active');
			body.addClass('lec_first_step');
			
		}
		else {
			body.removeClass('lec_first_step');
			logo.removeClass('active');
		}
		if ($(window).scrollTop() > 500) {
			body.addClass('lec_second_step');
		}
		else {
			body.removeClass('lec_second_step');
		}
	});

	/* Fixed for Parallax */
	$(".lec_fixed").css("background-attachment","fixed");


	/* Submenu */
	$('.lec_main_menu_content_menu .menu-item-has-children > a, .lec_main_menu_content_menu .page_item_has_children > a').on("click", function(e){
		$(this).next('ul').slideToggle(300);
		$(this).toggleClass('active');
		e.preventDefault();
	});

	/*Neon Titles*/
	$('.lec_content .lec_neon_subtitle').each(function(){
		var subtitle = $(this).html();
		var subtitle_quan = subtitle.split(" ");
		var subtitle_last = Math.floor(subtitle_quan.length/2);
		var subtitle_first = subtitle_quan.length - subtitle_last;
		var subtitle_cont = subtitle_quan.slice(0,subtitle_first)+'<b>'+subtitle_quan.slice(-subtitle_last)+'</b>';
		var subtitle_fin = subtitle_cont.replace(/[,]/g, " ");
		$(this).html(subtitle_fin);
	});

	/* Top Menu Click to Section */
	$('.lec_main_menu_content_menu a[href*=\\#]:not([href=\\#])').on("click", function(){
		$('.lec_main_menu_content_menu a[href*=\\#]:not([href=\\#])').removeClass('active');
		$(this).addClass('active');
		$(".lec_main_menu").trigger('click');
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    }

	});

 	/* Mobile Menu */

	$('.lec_mobile_menu_content .menu-item-has-children, .lec_mobile_menu_content .page_item_has_children').on("click", function(e){
		$(this).find('ul').slideToggle(300);
	});
	$('.lec_mobile_menu').on("click", function(e){
		$(this).toggleClass('active');
		$('.lec_mobile_menu_hor').toggleClass('active');
	});
	$('.lec_header_search span').on("click", function(e){
		$(this).next('.lec_header_search_cont').fadeToggle();
	});

	
		

	$(window).on('load', function(){

		/* Block Autheight */
		if( !device.tablet() && !device.mobile() ) {
			$('.lec_auto_height').each(function(){
				setEqualHeight($(this).find('div[class^="col"], div[class^="fw-col"]'));
			});
		}
		if( device.tablet() ) {
			$('.lec_auto_height').each(function(){
				setEqualHeight($(this).find('div[class^="col"], div[class^="fw-col"]'));
			});
		}

		$(window).resize(function() {
			if( !device.tablet() && !device.mobile() ) {
				$('.lec_auto_height').each(function(){
					setEqualHeight($(this).find('div[class^="col"], div[class^="fw-col"]'));
				});
			}
			if( device.tablet()) {
				$('.lec_auto_height').each(function(){
					setEqualHeight($(this).find('div[class^="col"], div[class^="fw-col"]'));
				});
			}
		});

		/*Boxes AutoHeight*/
		function setEqualHeight(columns)
		{
			var tallestcolumn = 0;
			columns.each(
				function()
				{
					$(this).css('height','auto');
					var currentHeight = $(this).height();
					if(currentHeight > tallestcolumn)
						{
						tallestcolumn = currentHeight;
						}
				}
			);
		columns.height(tallestcolumn);
		}

		// Page loader
	        
	    body.imagesLoaded(function(){
	        $(".lec_page_loader div").fadeOut();
	    	$(".lec_page_loader").delay(200).fadeOut("slow");
	    });


		/*SkroolR*/
		if( !device.tablet() && !device.mobile() ) {
			var s = skrollr.init({
				forceHeight: false,
			});
			$(window).stellar({
			 	horizontalScrolling: false,
				responsive: true,
				positionProperty: 'transform',
				hideDistantElements: true,
		 	});
		}

		/*Instafeed*/
		$('#instagram-carousel').each(function(){
			var userid = $(this).attr('data-userid');
			var accesstoken = $(this).attr('data-accesstoken');
			var feed = new Instafeed({
		        get: 'user',
		        userId: userid,
		        accessToken: accesstoken,
		        sortBy: 'most-liked',
			      template: '<a href="{{link}}" target="_blank" class="lec_insta_item lec_news_block text-center"><span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="{{image}}"></span></span><span class="lec_news_title lec_gold_subtitle">{{caption}}</span></div>',
			      target: 'instagram-carousel',
			      limit: 9,
			      resolution: 'standard_resolution',
		        after: function () {
		            $('#instagram-carousel').owlCarousel({
		              items: 3,
		              responsive : {
								    0 : {
								        items:1,
								    },
								    768 : {
								        items:2,
								    },
								    980 : {
								        items:3,
								    }
									},
		              navigation: true,
		              responsiveRefreshRate: 200,
		              pagination: true,
		              autoPlay: 4000,
		              margin:40,
		              loop:true,
		              navigationText:['<i class="ti ti-angle-left"></i>','<i class="ti ti-angle-right"></i>']
		          });
		          /* Section Background */
							$('.lec_image_bck').each(function(){
								var image = $(this).attr('data-image');
								var gradient = $(this).attr('data-gradient');
								var color = $(this).attr('data-color');
								var blend = $(this).attr('data-blend');
								var opacity = $(this).attr('data-opacity');
								var position = $(this).attr('data-position');
								var height = $(this).attr('data-height');
								if (image){
									$(this).css('background-image', 'url('+image+')');	
								}
								if (gradient){
									$(this).css('background-image', gradient);	
								}
								if (color){
									$(this).css('background-color', color);	
								}
								if (blend){
									$(this).css('background-blend-mode', blend);	
								}
								if (position){
									$(this).css('background-position', position);	
								}
								if (opacity){
									$(this).css('opacity', opacity);	
								}
								if (height){
									$(this).css('height', height);	
								}

							});
		        }

		    });
		  	feed.run();
		})


		
		
	});
	
})(jQuery);




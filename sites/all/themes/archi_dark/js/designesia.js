// © Copyright 2015 - Archi by Designesia 
(function($){
$(document).ready(function() {		
	'use strict';				// use strict mode

	var de_header_style 	= 1; // 1 - solid, 2 - transparent
	var de_header_layout	= 1; // 1 - default, 2 - extended
	var de_menu_separator	= 1; // 1 - dotted, 2 - border, 3 - circle, 4 - square, 5 - plus, 6 - strip, 0 - none
	var de_color_style		= 1; // 1 - default, 2 - light style
	var de_font_style		= 1; // 1 - default, 2 - alternate font style
	var de_header_color		= 1; // 1 - default, 2 - light style
	
	var mobile_menu_show    = 0;
	
	if(de_color_style==2){$('body').addClass('de_light');}	
	if(de_font_style==2){$('head').append('<link rel="stylesheet" href="css/font-style-2.css" type="text/css" />');}	
	if(de_header_style==2){$('header').addClass('transparent')}	
	if(de_menu_separator==2){$('#mainmenu').addClass('line-separator');
	}else if(de_menu_separator==3){$('#mainmenu').addClass('circle-separator');
	}else if(de_menu_separator==4){$('#mainmenu').addClass('square-separator');
	}else if(de_menu_separator==5){$('#mainmenu').addClass('plus-separator');
	}else if(de_menu_separator==6){$('#mainmenu').addClass('strip-separator');
	}else if(de_menu_separator==0){$('#mainmenu').addClass('no-separator');}
	if(de_header_layout==2){$('header').addClass('de_header_2');$('header .info').show();}	
	if(de_header_color==2){$('header').addClass('header-light');}

	//Qty Up-Down
	$('.info-qty').each(function(){
		var qtyval = parseInt($(this).find('input[id^="edit-quantity"]').val());
		var input_qty = $(this).find('input[id^="edit-quantity"]');
		$(this).find('.qty-up > span').click(function(event){
			event.preventDefault();

			qtyval=qtyval+1;
			//$('.qty-val').text(qtyval);
			input_qty.val(qtyval);
		});
		$(this).find('.qty-down > span').click(function(event){
			event.preventDefault();
			qtyval=qtyval-1;
			if(qtyval>0){
				//$('.qty-val').text(qtyval);
				input_qty.val(qtyval);
			}else{
				qtyval=1;
				//$('.qty-val').text(qtyval);
				input_qty.val(qtyval);
			}
		});
	});

// --------------------------------------------------
// paralax background
// --------------------------------------------------
	var $window = $(window);
   	$('section[data-type="background"]').each(function(){
    var $bgobj = $(this); // assigning the object
                    
    $(window).scroll(function() {
	var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
	var coords = '50% '+ yPos + 'px';
	$bgobj.css({ backgroundPosition: coords });
		
	});
 	});
	document.createElement("article");
	document.createElement("section");
	
	
// --------------------------------------------------
// magnificPopup
// --------------------------------------------------
	
	if(Drupal.settings.view_project != 'undefined' && Drupal.settings.view_project == 'popup') {
		$('.simple-ajax-popup-align-top').magnificPopup({
			type: 'ajax',
			alignTop: true,
			overflowY: 'scroll'
		});
	}
    $('.simple-ajax-popup').magnificPopup({
        type: 'ajax'
    });

	// zoom gallery
	$('.zoom-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title');
				//return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});
	
	// popup youtube, video, gmaps
	
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
	
	// image popup
	
	$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});
	
	$('.image-popup-gallery').magnificPopup({
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title');
				//return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		gallery: {
			enabled: true
		}
		
	});
	

// wow $
	
new WOW().init();
	
// --------------------------------------------------
// init
// --------------------------------------------------
	function init_de(){
	$('.de-team-list').each(function(){

		 $(this).find("img").on('load', function() {
				var w = $(this).css("width");
		 	   	var h = $(this).css("height");
			   	//nh = (h.substring(0, h.length - 2)/2)-48;
		 
				$(this).parent().parent().find(".team-pic").css("height",h);
				$(this).parent().parent().find(".team-desc").css("width",w);
			 	$(this).parent().parent().find(".team-desc").css("height",h);
				$(this).parent().parent().find(".team-desc").css("top",h);

			}).each(function() {
			  if(this.complete) $(this).load();
			});
	});

	$(".de-team-list").on("mouseenter", function () {
		 var h;
		 h = $(this).find("img").css("height");
		 $(this).find(".team-desc").stop(true).animate({'top': "0px"},350,'easeOutQuad');
		 $(this).find("img").stop(true).animate({'margin-top': "-100px"},400,'easeOutQuad');
	}).on("mouseleave", function () {		
		 var h;
		 h = $(this).find("img").css("height");
		 $(this).find(".team-desc").stop(true).animate({'top': h},350,'easeOutQuad');
		 $(this).find("img").stop(true).animate({'margin-top': "0px"},400,'easeOutQuad');
  	})	
	
	
	// portfolio
	
		$('.item .picframe').each(function(){	
		
		 $(this).find("img").css("width","100%");
		 $(this).find("img").css("height","auto");
		 
		 $(this).find("img").on('load', function() {
				var w = $(this).css("width");
		 	   	var h = $(this).css("height");
			   	//nh = (h.substring(0, h.length - 2)/2)-48;
		 
				$(this).parent().css("height",h);

			}).each(function() {
			  if(this.complete) $(this).load();
			});
		});
		
	// --------------------------------------------------
	// portfolio hover
	// --------------------------------------------------
	$('.overlay').fadeTo(1, 0);
	
	// gallery hover
	$(".item .picframe").on("mouseenter", function () {
	 $(this).parent().find(".overlay").width($(this).find("img").css("width"));
	 $(this).parent().find(".overlay").height($(this).find("img").css("height"));
	 $(this).parent().find(".overlay").stop(true).fadeTo(300, .9);
	 var picheight = $(this).find("img").css("height");
	 var newheight;
	 newheight = (picheight.substring(0, picheight.length - 2)/2)-10;
	 //alert(newheight);
	 $(this).parent().find(".pf_text").stop(true).animate({'margin-top': newheight},300,'easeOutCubic');
	 
	 var w = $(this).find("img").css("width");
	 var h = $(this).find("img").css("height");
	 var w = parseInt(w, 10);
	 var h = parseInt(h, 10);
	 var $scale = 1.2;
	 //alert(w);
	 
	$(this).find("img").stop(true).animate({
            width:  w*$scale,
            height: h*$scale,
            'margin-left': -w*($scale - 1)/2,
            'margin-top':  -h*($scale - 1)/2
     }, 700,'easeOutQuad');

	
  	}).on("mouseleave", function () {
	 var newheight;
	 var picheight = $(this).find("img").css("height");	 
	 newheight = (picheight.substring(0, picheight.length - 2)/2)-10;
	 $(this).parent().find(".pf_text").stop(true).animate({'margin-top': newheight - 30},300,'easeOutCubic');
	 $(this).parent().find(".overlay").stop(true).fadeTo(300, 0);
	 $(this).find("img").stop(true).animate({
            width:  '100%',
            height: '100%',
            'margin-left': 0,
            'margin-top': 0
     }, 700,'easeOutQuad');
	})

	
	
	
	$('.overlay').fadeTo(1, 0);
	// team hover
	}
	
	
	init_de();
	

	// --------------------------------------------------
	// preloader
	// --------------------------------------------------
	
	//calling jPreLoader function with properties
	if( Drupal.settings.loader_page === true) {
		$('body').jpreLoader({
			splashID: "#jSplash",
			splashFunction: function () {  //passing Splash Screen script to jPreLoader
				$('#jSplash').children('section').not('.selected').hide();
				$('#jSplash').hide().fadeIn(800);
				init_de();
				var timer = setInterval(function () {
					splashRotator();
				}, 1500);
			}
		}, function () {	//jPreLoader callback function
			clearInterval();

			$(function () {
				var v_url = document.URL;

				if (v_url.indexOf('#') != -1) {
					var v_hash = v_url.substring(v_url.indexOf("#") + 1);


					$('html, body').animate({
						scrollTop: $('#' + v_hash).offset().top - 70
					}, 200);
					return false;
				}
			});
		});
	}else{

		$('body').show();
	}

	<!-- End of jPreLoader script -->

	function splashRotator(){
		var cur = $('#jSplash').children('.selected');
		var next = $(cur).next();
		
		if($(next).length != 0) {
			$(next).addClass('selected');
		} else {
			$('#jSplash').children('section:first-child').addClass('selected');
			next = $('#jSplash').children('section:first-child');
		}
			
		$(cur).removeClass('selected').fadeOut(100, function() {
			$(next).fadeIn(100);
		});
	}
	
	
// --------------------------------------------------
// function
// --------------------------------------------------
	
	function video_autosize(){
		$('.de-video-container').each(function() {
			var height_1 = $(this).css("height");
			var height_2 = $(this).find(".de-video-content").css("height");
			var newheight = (height_1.substring(0, height_1.length - 2)-height_2.substring(0, height_2.length - 2))/2;
			$(this).find('.de-video-overlay').css("height", height_1);
			$(this).find(".de-video-content").animate({'margin-top': newheight},'fast');
		});
	}
	
	
// --------------------------------------------------
// sticky header
// --------------------------------------------------
	    
    $(window).on("scroll", function() {
    	$("header").addClass("clone", 1000, "easeOutBounce" );
		
		var $document = $(document);
		var vscroll = 0;
		
		if ($document.scrollTop() >= 50 && vscroll==0) {
			$("header.autoshow").removeClass("scrollOff");
			$("header.autoshow").addClass("scrollOn");
			$("header.autoshow").css("height","auto");
			vscroll = 1;
		 } else {
			$("header.autoshow").removeClass("scrollOn");
			$("header.autoshow").addClass("scrollOff");
			vscroll = 0;
		 }
    });
	
	
	window.onresize = function(event) {
		
		enquire.register("screen and (min-width: 993px)", {
		match : function() {
			$('#mainmenu').show();
			mobile_menu_show = 1;
		},  
		unmatch : function() {
			$('#mainmenu').hide();
			mobile_menu_show = 0;
			$("#menu-btn").show();
		}
		});
		
		init();
		init_de();
		video_autosize();
		
		//$('#gallery').isotope('reLayout'); uncomment 05-07-2016

		$('header').removeClass('smaller');
		$('header').removeClass('logo-smaller');
		$('header').removeClass('clone');
	};	
	

	function init() {
		
		var sh = $('#de-sidebar').css("height");
		var dh = $(window).innerHeight();
		
		var h = parseInt(sh) - parseInt(dh);
		
        window.addEventListener('scroll', function(e){
			
			var mq = window.matchMedia( "(min-width: 993px)" );
			var ms = window.matchMedia( "(min-width: 768px)" );
			
			if (mq.matches) {
				var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }

            }
			}
			
			
			if (mq.matches) {

			if($("header").hasClass("side-header")){
				if($(document).scrollTop()>=h){
					$('#de-sidebar').css("position","fixed");
					if(parseInt(sh)>parseInt(dh)){
					$('#de-sidebar').css("top",-h);
					}
					$('#main').addClass("col-md-offset-3");
					$('h1#logo img').css("padding-left","7px");
					$('header .h-content').css("padding-left","7px");
					$('#mainmenu li').css("width","103%");
				}else{
					$('#de-sidebar').css("position","relative");
					if(parseInt(sh)>parseInt(dh)){
					$('#de-sidebar').css("top",0);
					}
					$('#main').removeClass("col-md-offset-3");
					$('h1#logo img').css("padding-left","0px");
					$('header .h-content').css("padding-left","0px");
					$('#mainmenu li').css("width","100%");
				}
			}
			
			}
			
			
			
            
        });
    }
    window.onload = init();


// --------------------------------------------------
// owlCarousel
// --------------------------------------------------

	$("#gallery-carousel").owlCarousel({
    items : 4,
    navigation : false,
	pagination : false
    });
	
	$(".carousel-gallery").owlCarousel({
    items : 4,
    navigation : false,
	pagination : false
    });
	
	$("#blog-carousel").owlCarousel({
    items : 2,
    navigation : false,
	pagination : true
    });
	
	
	
	$("#testimonial-carousel").owlCarousel({
    items : 2,
	itemsDesktop : [1199,2],
	itemsDesktopSmall : [980,2],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    navigation : false,
    });
	
	$("#logo-carousel").owlCarousel({
    items : 6,
    navigation : false,
	pagination : false,
	autoPlay : true
    });
	
	$("#contact-carousel").owlCarousel({
    items : 1,
	singleItem:true,	
    navigation : false,
	pagination : false,
	autoPlay : true
    });
	
	
	$(".blog-slide").owlCarousel({
    items : 1,
	singleItem:true,	
    navigation : false,
	pagination : false,
	autoPlay : false
    });
	
	
	// Custom Navigation owlCarousel
	$(".next").on("click", function() {
		$(this).parent().parent().find('.blog-slide').trigger('owl.next');
	});
	$(".prev").on("click", function() {
		$(this).parent().parent().find('.blog-slide').trigger('owl.prev');
	});

	
	
// --------------------------------------------------
// custom positiion
// --------------------------------------------------
	var $doc_height = $(window).innerHeight(); 
	$('.homepage #content.content-overlay,#homepage #content.content-overlay').css("margin-top", $doc_height);
	$('.full-height').css("height", $doc_height);
	var picheight = $('.center-y').css("height");
	picheight = parseInt(picheight, 10);
	$('.center-y').css('margin-top', (($doc_height - picheight)/2)-90);
	$('.full-height .de-video-container').css("height",$doc_height);
	

	
// --------------------------------------------------
// blog list hover
// --------------------------------------------------
	/*
	$(".blog-list").on("mouseenter", function () {
	 var v_height = $(this).find(".blog-slide").css("height");
	 var v_width = $(this).find(".blog-slide").css("width");
	 var newheight = (v_height.substring(0, v_height.length - 2)/2)-40;
	 $(this).find(".owl-arrow").css("margin-top",newheight);
	  $(this).find(".owl-arrow").css("width",v_width);
	  $(this).find(".owl-arrow").fadeTo(150,1);
	 //alert(v_height);
	}).on("mouseleave", function () {
	 $(this).find(".owl-arrow").fadeTo(150,0);
  	})
	*/
	
	//  logo carousel hover
	$("#logo-carousel img").on("mouseenter", function () {
	 $(this).fadeTo(150,.5);
	}).on("mouseleave", function () {
	 $(this).fadeTo(150,1);	 
  	})
	
	
	$(window).load(function() {
			
	video_autosize();	
		
// --------------------------------------------------
// filtering gallery
// --------------------------------------------------
	var $container = $('#gallery');
		$container.isotope({
			itemSelector: '.item',
			filter: '*'
	});
	$('#filters a').on("click", function() {
		var $this = $(this);
		if ( $this.hasClass('selected') ) {
			return false;
			}
		var $optionSet = $this.parents();
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected');
				
		var selector = $(this).attr('data-filter');
		$container.isotope({ 
		filter: selector
	});
	return false;
	});
		
	
// --------------------------------------------------
// revolution slider
// --------------------------------------------------
	var revapi;

  	revapi = $('#revolution-slider').revolution({
	delay:15000,
	startwidth:1170,
	startheight:500,
	hideThumbs:10,
	fullWidth:"off",
	fullScreen:"on",
	fullScreenOffsetContainer: "",
	touchenabled:"on",
	navigationType:"none",
    dottedOverlay:""
	});
	

// --------------------------------------------------
// tabs
// --------------------------------------------------
	$('.de_tab').find('.de_tab_content > div').hide();
	$('.de_tab').find('.de_tab_content > div:first').show();
	$('li').find('.v-border').fadeTo(150,0);
	$('li.active').find('.v-border').fadeTo(150,1);
	
	$('.de_nav li').click(function() {
		$(this).parent().find('li').removeClass("active");
		$(this).addClass("active");
		$(this).parent().parent().find('.v-border').fadeTo(150,0);
		$(this).parent().parent().find('.de_tab_content > div').hide();
	
		var indexer = $(this).index(); //gets the current index of (this) which is #nav li
		$(this).parent().parent().find('.de_tab_content > div:eq(' + indexer + ')').fadeIn(); //uses whatever index the link has to open the corresponding box 
		$(this).find('.v-border').fadeTo(150,1);
	});
	
	
	// request quote function
	
	var rq_step = 1;
	
	$('#request_form .btn-right').click(function() {
		
	var rq_name = $('#rq_name').val();
	var rq_email = $('#rq_email').val();
	var rq_phone = $('#rq_phone').val();
	
	if(rq_step==1){
		if(rq_name.length == 0){$('#rq_name').addClass("error_input");}else{ $('#rq_name').removeClass("error_input");}
		if(rq_email.length == 0){$('#rq_email').addClass("error_input");}else{ $('#rq_email').removeClass("error_input");}
		if(rq_phone.length==0){$('#rq_phone').addClass("error_input");}else{ $('#rq_phone').removeClass("error_input");}
	}
	
	if(rq_name.length != 0 && rq_email.length != 0 && rq_phone.length != 0){
		$("#rq_step_1").hide();
		$("#rq_step_2").fadeIn();
	}
	
	});
	
// --------------------------------------------------
// tabs
// --------------------------------------------------
	$('.de_review').find('.de_tab_content > div').hide();
	$('.de_review').find('.de_tab_content > div:first').show();
	//$('.de_review').find('.de_nav li').fadeTo(150,.5);
	$('.de_review').find('.de_nav li:first').fadeTo(150,1);
	
	$('.de_nav li').click(function() {
		$(this).parent().find('li').removeClass("active");
		//$(this).parent().find('li').fadeTo(150,.5);
		$(this).addClass("active");
		$(this).fadeTo(150,1);	
		$(this).parent().parent().find('.de_tab_content > div').hide();
	
		var indexer = $(this).index(); //gets the current index of (this) which is #nav li
		$(this).parent().parent().find('.de_tab_content > div:eq(' + indexer + ')').show(); //uses whatever index the link has to open the corresponding box 
	});
	
	
// --------------------------------------------------
// toggle
// --------------------------------------------------
	$(".toggle-list h2").addClass("acc_active");
	$(".toggle-list h2").toggle(
	function() {
	 $(this).addClass("acc_noactive");
     $(this).next(".ac-content").slideToggle(200);
	},
    function() {
	 $(this).removeClass("acc_noactive").addClass("acc_active");
	 $(this).next(".ac-content").slideToggle(200);
  	})
	
	var mb;
	
	// --------------------------------------------------
	// navigation for mobile
	// --------------------------------------------------
	
	
	
	$('#menu-btn').on("click", function() {
		if(mobile_menu_show==0){
			$('#mainmenu').slideDown();
			mobile_menu_show = 1;
		}else{
			$('#mainmenu').slideUp();
			mobile_menu_show = 0;			
		}
	})
	
// one page navigation
	      /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
		 
        $(".homepage nav a,#homepage nav a, .scroll-to").click(function(evn){

			if (this.href.indexOf('#') != -1) {
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
			}
        });
		
		$("a.btn").click(function(evn){
			
			if (this.href.indexOf('#') != -1) {
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
			}
        });
		
		$('.de-gallery .item .icon-info').on("click", function() {
			$('.page-overlay').show();
			url = $(this).attr("data-value");
			
			$("#loader-area .project-load").load(url, function() {
			$("#loader-area").slideDown(500,function(){
				$('.page-overlay').hide();
			$('html, body').animate({
				scrollTop: $('#loader-area').offset().top - 70
			}, 500, 'easeOutCubic');
			
		//
			
			$(".image-slider").owlCarousel({
			items : 1,
			singleItem:true,	
			navigation : false,
			pagination : true,
			autoPlay : false
			});
			
			$(".container").fitVids();
			
			$('#btn-close-x').on("click", function() {
			$("#loader-area").slideUp(500,function(){
			$('html, body').animate({
				scrollTop: $('#section-portfolio').offset().top - 70
			}, 500, 'easeOutCirc');

			});

			return false;			
				
				});  
			
			});			
		}); 
		});   
		
		$('.de-gallery .item').on("click", function() {
			$('#navigation').show();
		});
		

// --------------------------------------------------
// custom page with background on side
// --------------------------------------------------
	$('.side-bg').each(function(){	
		$(this).find(".image-container").css("height",$(this).find(".image-container").parent().css("height"));
	});
		
	var target = $('.center-y');
	var targetHeight = target.outerHeight();
	
	$(document).scroll(function(e){
		var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
		if(scrollPercent >= 0){
			target.css('opacity', scrollPercent);
		}
	});

	$(document).scroll(function() {
		$('.homepage nav li a').each(function(){
			if (this.href.indexOf('#') != -1) {
			var href = $(this).attr('href');
			href = '#'+href.split("#")[1];
				if($(window).scrollTop() > $(href).offset().top - 140){
					$('nav li a').removeClass('active');
					$(this).addClass('active');
				}
			}
		});
	});
	
});

	
// --------------------------------------------------
// css animation
// --------------------------------------------------
	var v_count = '0';

	$(window).load(function() {
				
		$('.animated').fadeTo(0,0);
		$('.animated').each(function(){
		var imagePos = $(this).offset().top;
		var timedelay = $(this).attr('data-delay');
		
		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+300) {
				$(this).fadeTo(1,500);
				var $anim = $(this).attr('data-animation');
			}
		});
		
		
		// btn arrow up
		$(".arrow-up").on("click", function() {
			$(".coming-soon .coming-soon-content").fadeOut("medium",function(){
				$("#hide-content").fadeIn(600,function(){
					$('.arrow-up').animate({'bottom': '-40px' },"slow");
					$('.arrow-down').animate({'top': '0' },"slow");
				});
			});
		});
		
		// btn arrow down
		$(".arrow-down").on("click", function() {
			$("#hide-content").fadeOut("slow",function(){
				$(".coming-soon .coming-soon-content").fadeIn(800,function(){
					$('.arrow-up').animate({'bottom': '0px' },"slow");
					$('.arrow-down').animate({'top': '-40' },"slow");
				});
			});
		});
		
		// isotope
		$('#gallery').isotope('reLayout');

	});
		
	$(window).scroll(function() {
		
// --------------------------------------------------
// counter
// --------------------------------------------------
	
		$('.timer').each(function(){
		var imagePos = $(this).offset().top;
				
		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+500 && v_count=='0') {		

					  $(function ($) {

					  // start all the timers
					  $('.timer').each(count);
					  
					  
					  function count(options) {
					 	v_count = '1';
						var $this = $(this);
						options = $.extend({}, options || {}, $this.data('countToOptions') || {});
						$this.countTo(options);
					  }
					});
					
				}
			});
		
// --------------------------------------------------
// progress bar
// --------------------------------------------------
		$('.de-progress').each(function(){
		var pos_y = $(this).offset().top;
		var value = $(this).find(".progress-bar").attr('data-value');
		
		var topOfWindow = $(window).scrollTop();
			if (pos_y < topOfWindow+500) {		
				$(this).find(".progress-bar").animate({'width': value },"slow");
			}
		});
	
	
		$('.animated').each(function(){
		var imagePos = $(this).offset().top;
		var timedelay = $(this).attr('data-delay');
		
		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+500) {		
				$(this).delay(timedelay).queue(function(){
					$(this).fadeTo(1,500);
					var $anim = $(this).attr('data-animation');
					$(this).addClass($anim).clearQueue();
				});
				
			}
		});
		
		$(".nav-exit").on("click", function() {
			$.magnificPopup.close();
        });

		
	
	});
	
	
		// mainmenu arrow click
		$("#nav-toggle").on( "click", function() {		
			var iteration = $(this).data('iteration') || 1;
			switch (iteration) {
				case 1:
					var h = $(window).height();
					$(this).addClass('open');	
					$("#menu-wrapper").stop(true).animate({'height': h},1200,'easeInOutExpo');
					$("#fullscreen-nav").stop(true).animate({'margin-top': 90, 'opacity':1},1200,'easeInOutExpo');
					break;

				case 2:
					$(this).removeClass('open');
					$("#menu-wrapper").stop(true).animate({'height': 0},1200,'easeInOutExpo');
					$("#fullscreen-nav").stop(true).animate({'margin-top': 20, 'opacity':0},1200,'easeInOutExpo');
					break;
			}
			iteration++;
			if (iteration > 2) iteration = 1;
			$(this).data('iteration', iteration);
		});
		
		// mainmenu create span
	$('#fullscreen-menu > li > a').each(function(){	
		if($(this).next("ul").length > 0)  {
		$("<span></span>").insertAfter($(this));
		}
	});
	
	$('#fullscreen-menu > li > ul > li > a').each(function(){	
		if($(this).next("ul").length > 0)  {
		$("<span></span>").insertAfter($(this));
		}
	});
	

	// mainmenu arrow click
    $("#fullscreen-menu > li > span, #mainmenu > li > ul > li > span").on( "click", function() {
		$('header').css("height","auto");
        var iteration = $(this).data('iteration') || 1;
        switch (iteration) {
            case 1:
                $(this).next("ul").css("height","auto");
				var curHeight = $(this).next("ul").height();
				$(this).next("ul").css("height","0");
				$(this).next("ul").animate({'height': curHeight},600,'easeInOutExpo');
				break;

            case 2:
                $(this).next("ul").animate({'height': "0"},600,'easeInOutExpo');
				break;
        }
        iteration++;
        if (iteration > 2) iteration = 1;
        $(this).data('iteration', iteration);
    });
	
	//$('footer').append('<a href="#" id="back-to-top"></a>');
	
	if ($('#back-to-top').length) {
    var scrollTrigger = 500, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
	
	
}

});
}(jQuery));


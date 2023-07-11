(function($) {
    "use strict";
     $(document).on('ready', function() {	
			
			
		/*====================================
			Mobile Menu JS
		======================================*/ 
		$('.main-menu-active').slicknav({
			prependTo:".mobile-nav",
			label: '',
			closedSymbol: "<i class='fa fa-angle-down'></i>",
			openedSymbol: "<i class='fa fa-angle-up'></i>",
			duration: 500,
		});	
			
		jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 200) {
				$('#scrollUp').addClass("active");
			} else {
				$('#scrollUp').removeClass("active");
			}
		});
		
	});
	
	jQuery(window).on("scroll", function() {
		if ($(this).scrollTop() > 100) {
			$(".header.sticky-ok").addClass("sticky");
		} else {
			$(".header.sticky-ok").removeClass("sticky");
		}
	});
		
	
	/*=====================================
	  Preloader JS
	======================================*/ 	
	//After 2s preloader is fadeOut
	$('.preloader').delay(2000).fadeOut('slow');
	setTimeout(function() {
	//After 2s, the no-scroll class of the body will be removed
	$('body').removeClass('no-scroll');
	}, 2000); //Here you can change preloader time
	 
})(jQuery);

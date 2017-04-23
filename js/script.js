$ = jQuery.noConflict();

$(document).ready(function() {
	
	// Add in Font Awesome icons into nav menus
	$(".mobile-site-nav #menu-item-26 > a").append("<i class='fa fa-angle-right' aria-hidden='true'></i>");
	
	
	$(".site-nav #menu-item-34 > a").append("<i class='fa fa-angle-right' aria-hidden='true'></i>");
		

	
	
	
	
	// Mobile-site-nav dropdown
	$(".mobile-site-nav #menu-item-26").click(function() {
		
		event.preventDefault();



		if ($(".mobile-site-nav .submenu").css("display") == "none") {
			
			// Rotates arrow
			$(".mobile-site-nav #menu-item-26 > a i").rotate({
				animateTo:90
			})	
				
			// Sets color to blue
			$(".mobile-site-nav #menu-item-26 a").css("color", "#3182e6");
			
		} else if ($(".mobile-site-nav .submenu").css("display") != "none" && $(".mobile-site-nav .submenu").hasClass("current-menu-item") ) {
			
			// Rotates arrow
			$(".mobile-site-nav #menu-item-26 > a i").rotate({
				animateTo:0
			});
		
			// Sets color to blue
			$(".mobile-site-nav #menu-item-26 a").css("color", "#3182e6");
		
		} else {
			
			// Rotates arrow
			$(".mobile-site-nav #menu-item-26 > a i").rotate({
				animateTo:0
			});
		
			// Resets color to tan
			$(".mobile-site-nav #menu-item-26 a").css("color", "#e6dfce");
			
		}
		
		
		
		// Makes sub-menu appear and disappear
		$(".mobile-site-nav .submenu").slideToggle(300);
		
	});
	
	
	
	
	
	
	// Mobile-site-nav dropdown parent a color 
	if ( $(".mobile-site-nav .submenu").hasClass("current-menu-item") ) {
		
		// Sets color to blue
		$("#menu-item-26 a").css("color", "#3182e6");
		
	}
	
	
		
	
	
	// Site-nav dropdown
	$(".site-nav #menu-item-34 > a").click(function() {
		
		event.preventDefault();
		
		
		
		
		if ($(".site-nav .sub-menu").css("display") == "none") {
			
			// Rotates arrow
			$(".site-nav #menu-item-34 > a i").rotate({
				animateTo:90
			});
			
			// Sets color to blue
			$(".site-nav #menu-item-34 > a").css("color", "#3182e6");
			
			// Sets bottom border
			$(".site-nav #menu-item-34 > a").css("border-bottom", "8px solid #3182e6");
			
			
		} else if ($(".site-nav .sub-menu").css("display") != "none" && $(".site-nav .sub-menu li").hasClass("current-menu-item") ) {
			
			// Rotates arrow
			$(".site-nav #menu-item-34 > a i").rotate({
				animateTo:0
			});
		
			// Sets color to blue
			$(".site-nav #menu-item-34 > a").css("color", "#3182e6");	
			
			// Sets bottom border
			$(".site-nav #menu-item-34 > a").css("border-bottom", "8px solid #3182e6");
			
		} else {
			
			// Rotates arrow
			$(".site-nav #menu-item-34 > a i").rotate({
				animateTo:0
			});
			
			// Resets color to gray
			$(".site-nav #menu-item-34 > a").css("color", "#353535");
			
			// Sets bottom border
			$(".site-nav #menu-item-34 > a").css("border-bottom", "none");
		}
		
		
		
		// Makes sub-menu appear and disappear
		$(".site-nav .sub-menu").slideToggle(300);
		
	});

	
	
	// Site-nav dropdown parent a color 
	if ( $(".site-nav .sub-menu li").hasClass("current-menu-item") ) {
		
		// Sets color to blue
		$(".site-nav #menu-item-34 > a").css("color", "#3182e6");
	}
	
	
	
	
	
	
	// Mobile question dropdown
	$(".question .mobile-h3").click(function() {
		event.preventDefault();
		
		
		
		if ($(this).siblings(".answer").css("display") == "none") {
			
			// Rotates arrow
			$(this).children("a").children("i").rotate({
				animateTo:90
			});
				
			// Sets h3 color to gray
			$(this).children("a").css("color", "#3182e6");
			
		} else {
			
			// Rotates arrow
			$(this).children("a").children("i").rotate({
				animateTo:0
			});
			
			// Sets h3 color to blue
			$(this).children("a").css("color", "#353535");
			
		}
		
		
		
		// Makes answer appear and disappear
		$(this).siblings(".answer").slideToggle(400);
		
	});
	
	
	
	
	
	// Mobile service dropdown
	$(".service .mobile-h2").click(function() {
		event.preventDefault();
		
		
		
		if ($(this).siblings(".service-description").css("display") == "none") {
			
			// Rotates arrow
			$(this).children("a").children("i").rotate({
				animateTo:90
			});
				
			// Sets h3 color to gray
			$(this).children("a").css("color", "#3182e6");
			
		} else {
			
			// Rotates arrow
			$(this).children("a").children("i").rotate({
				animateTo:0
			});
			
			// Sets h3 color to blue
			$(this).children("a").css("color", "#353535");
			
		}
		
		// Makes answer appear and disappear
		$(this).siblings(".service-description").slideToggle(400);
		
	});
	
	
	
});
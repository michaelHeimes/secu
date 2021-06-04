jQuery( document ).ready(function($) {
	var _app = window._app || {};
	
	_app.mobile_menu = function() {

		$(document).on('click', 'button.mobile-nav-toggle', function(e) {
			
			var $this = $(this);
			var $mobileNav = $('.mobile-nav');
			
			if ( $this.attr('aria-expanded') === "false") {
				$this.attr("aria-expanded","true");
				$mobileNav.fadeIn(400);
				
			} else {
				$this.attr("aria-expanded","false");
				$mobileNav.fadeOut(400);
			}
			
		});

	}
	
	
	_app.init = function() {
		_app.mobile_menu();		
	}
	
	// initialize functions on load
	$(function() {
		_app.init();
	});

});
jQuery( document ).ready(function($) {
	var _app = window._app || {};
	

// 	Mobile menu toggling
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
	
// 	Show dropdowns on hover
	_app.dropdown_hover = function() {
	    $(".dropdown").hover(function(){
			var $dropdownMenu = $(this).children('a').siblings(".dropdown-menu");
	    	    
			$(this).toggleClass("show");
	        $dropdownMenu.toggleClass("open");
	        $dropdownMenu.toggleClass("show");
	    });
	}
	
// 	Mega Menu
	_app.mega_menu = function() {	
// 		$('.header-bottom-nav > li.menu-item-has-children > ul').wrap('<div class="mega-menu"></div>');
		$('.header-bottom-nav > li.menu-item-has-children > ul > li').addClass('mega-parent');
		$('.header-bottom-nav > li.menu-item-has-children > ul > li:not(.menu-item-has-children)').addClass('mega-parent-nosub');
		$('.mega-parent-nosub').wrapAll('<ul class="no-subs dropdown-menu"></ul>');
		
	}
	
// 	wrap all ® in <sup> tags
	_app.sup_tags = function() {
		$('body :not(script)').contents().filter(function() {
		    return this.nodeType === 3;
		}).replaceWith(function() {
		    return this.nodeValue.replace(/[®©]/g, '<sup>$&</sup>');
		});
	}
	
	
// 	Rates Tab cotnent row right: equal widths
	_app.rates_row_right_widths = function() {
		
		if ( $('.tab-content.lev-2 .right .inner').length ) {
			$('.tab-content.lev-2 .tab-pane').each(function(i) {

				$(window).on("load resize", function() {
					
					var $rightWidths = $('.right .inner').map(function() {
						return $(this).width();
					}).get();

					var maxHeight = Math.max.apply(null, $rightWidths);
					
					$('.right .inner').width(maxHeight);
					
				});
			
			});
		}	
		
	}
	
	_app.init = function() {
		_app.mobile_menu();	
		_app.dropdown_hover();
		_app.mega_menu();
		_app.sup_tags();
		_app.rates_row_right_widths();	
	}
	
	// initialize functions on load
	$(function() {
		_app.init();
	});

});
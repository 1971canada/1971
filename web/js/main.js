var $window = $(window);
var $title = $('h1');
var $titleSpan = $('h1 span');
var $nav = $('nav');
var $expanded = $nav.filter('.nav-expanded');
var $containers = $('.container');

$('a[href^="mailto"]').each(function() {
	$(this).text(atob($(this).text()));
});

$('.toggle-nav').on('click', function(ev) {
	ev.preventDefault();
	
	if ($expanded.hasClass('nav-sticky')) {
		ev.stopPropagation();
		ev.stopImmediatePropagation();
	}
	
	if ($expanded.is(':visible')) {
		// Closing nav
		console.log('hiding nav after click');
		$expanded.addClass('nav-expanded-hide');
	} else {
		console.log('showing nav after click');
		$expanded.removeClass('nav-expanded-hide');
	}
});

$nav.find('a').on('click', function(ev) {
	ev.preventDefault();
	
	var $link = $(this);
	
	if ($link.closest('.nav-expanded').length) {
		$expanded.addClass('nav-expanded-hide');
	}
	
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top
			}, 500, function() {
				window.location.hash = $(ev.currentTarget).attr('href').replace(/^#/, '');
				if ($link.hasClass('toggle-nav')) {
					console.log('showing nav after scroll');
					$expanded.removeClass('nav-expanded-hide');
				}
			});
			return false;
		}
	}
});

$window.on('scroll', function(ev) {
	var windowHeight = $window.height();
	var percent = $window.scrollTop() / (windowHeight - $nav.height());
	
	if (percent >= 1) {
		$nav.addClass('nav-sticky');
	} else {
		$nav.removeClass('nav-sticky');
		
		$title.css('background-position', '0% ' + (percent * (-windowHeight / 4)) + 'px');
		$titleSpan.css('margin-top', (percent * -windowHeight) + 'px');
		$titleSpan.css('opacity', 1 - percent * 2);
	}
}).trigger('scroll');

$window.on('resize', function(ev) {
	//$containers.css('min-height', $window.height() + 'px');
}).trigger('resize');
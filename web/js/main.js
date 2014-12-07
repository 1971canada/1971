var $window = $(window);
var $title = $('h1');
var $titleSpan = $('h1 span');
var $nav = $('nav');
var $containers = $('.container');

$window.on('hashchange', function(ev) {
	var $sections = $('.content section');
	
	$sections.each(function() {
		var $section = $(this);
		
		if (window.location.hash.indexOf($section.attr('id')) != -1) {
			$('html, body').animate({
				scrollTop:$section.position().top
			});
		}
	});
	
	$nav.find('a').removeClass('active').filter('[href="' + window.location.hash + '"]').addClass('active');
	
	ev.preventDefault();
}).trigger('hashchange');

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
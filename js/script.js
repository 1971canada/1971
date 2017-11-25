var $main = $('.main');
var $return = $('.return');

$(window).on('scroll load', function (ev) {
	$main.css('opacity', Math.max(1 - document.documentElement.scrollTop / document.documentElement.clientHeight, 0.5));
	$return.css('opacity', Math.min(document.documentElement.scrollTop / document.documentElement.clientHeight, 1));
});

$(document).on('click', 'a[href^="#"]', function (ev) {
	ev.preventDefault();
	
	var position = ($.attr(this, 'href') === '#') ? 0 : $($.attr(this, 'href')).offset().top
	
	$('html, body').animate({
		scrollTop: position
	}, 500);
});
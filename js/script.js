var $main = $('.main');
var $return = $('.return');

$(window).on('scroll load', function (ev) {
	var position = window.scrollY / document.documentElement.clientHeight;
	$main.css('opacity', Math.max(1 - position, 0.5));
	$return.css('opacity', Math.min(position, 1));
});

$(document).on('click', 'a[href^="#"]', function (ev) {
	ev.preventDefault();
	
	var position = ($.attr(this, 'href') === '#') ? 0 : $($.attr(this, 'href')).offset().top;
	
	$('html, body').animate({
		scrollTop: position
	}, 500);
});
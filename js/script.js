var $main = $('.main');
var $return = $('.return');
var $video = $('.video');

$(window).on('resize load', function (ev) {
	console.log(window.innerWidth, window.innerHeight);
	if (window.innerWidth / window.innerHeight < 16 / 9) {
		$video.css({
			width:'auto',
			height:window.innerHeight
		});
	} else {
		$video.css({
			width:window.innerWidth,
			height:'auto'
		});
	}
}).trigger('resize');

$(window).on('scroll load', function (ev) {
	var position = window.scrollY / document.documentElement.clientHeight;
	$main.css('opacity', Math.max(1 - position, 0.25));
	$return.css('opacity', Math.min(position, 1));
}).trigger('scroll');

$(document).on('click', 'a[href^="#"]', function (ev) {
	ev.preventDefault();
	
	var position = ($.attr(this, 'href') === '#') ? 0 : $($.attr(this, 'href')).offset().top;
	
	$('html, body').animate({
		scrollTop: position
	}, 500);
});
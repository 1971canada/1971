<!DOCTYPE html>
<html lang="en">
	<head>
		<title>1971 &ndash; Punk rock from the boonies, eh.</title>
		
		<link href='//fonts.googleapis.com/css?family=Fjalla+One|Rokkitt:400,700|Titillium+Web:400,600,700,300,200' rel='stylesheet' type='text/css'>
		<style type="text/css">
			html {
				box-sizing: border-box;
			}
			
			*, *:before, *:after {
				box-sizing: inherit;
				margin:0;
				padding:0;
			}
			
			html, body {
				width:100%;
				height:100%;
			}
			
			body {
				font-family:Helvetica, Arial, sans-serif;
				background:#111;
				color:#EEE;
				margin:0;
				padding:0;
				font-size:62.5%;
				font-family:'Titillium Web', sans-serif;
			}
			
			a {
				color:#EEE;
				text-decoration:none;
			}
			
			h1 {
				font-size:10rem;
				font-family:'Fjalla One', sans-serif;
				
				width:100%;
				height:100%;
				background-image:url(img/woods.jpg);
				background-size:cover;
				text-align:center;
				position:fixed;
				top:0;
				left:0;
				z-index:-1;
			}
			
			h1:before {
				content: '';
				display: inline-block;
				height: 100%;
				vertical-align: middle;
				margin-right: -0.25em; /* Adjusts for spacing */
			}
			
			h1 span {
				display: inline-block;
				vertical-align: middle;
				width: 300px;
			}
			
			header {
				width:100%;
				height:100%;
			}
			
			nav {
				width:100%;
				background:rgba(0, 0, 0, 0.5);
				font-size:1rem;
				position:absolute;
				bottom:0;
				left:0;
				text-align:center;
			}
			
			.nav-sticky {
				position:fixed;
				top:0;
				left:0;
				height:auto;
				bottom:auto;
			}
			
			nav ul li {
				list-style:none;
				display:inline-block;
			}
			
			nav ul li a {
				display:inline-block;
				padding:10px 15px;
			}
			
			.content {
				background:rgba(0, 0, 0, 1);
			}
			
			.content::after {
				content: " "; /* Older browser do not support empty content */
				visibility: hidden;
				display: block;
				height: 0;
				clear: both;
			}
			
			.container {
				max-width:640px;
				margin:0 auto;
				padding:15px;
			}
			
			.albums {
				list-style:none;
			}
			
			.albums li {
				clear:both;
			}
			
			.album {
				border:0;
				width:200px;
				height:200px;
				float:left;
				padding:0 15px 15px 0;
			}
			
			.album-title {
				font-size:1rem;
			}
		</style>
	</head>
	<body>
		<h1><span>1971</span></h1>
		
		<header>
			<nav>
				<ul>
					<li>
						<a href="#music">Music</a>
					</li>
					<li>
						<a href="#shows">Shows</a>
					</li>
					<li>
						<a href="#merch">Merch</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</nav>
		</header>
		
	
		<div class="content">
			<section id="music" class="container">
				<ul class="albums">
					<li>
						<iframe class="album" src="https://bandcamp.com/EmbeddedPlayer/album=1828195228/size=large/bgcol=333333/linkcol=2ebd35/minimal=true/transparent=true/" seamless><a href="http://1971canada.bandcamp.com/album/s-t">S/T by 1971</a></iframe>
						<p class="album-title">S/T</p>
						<p class="album-year">2014</p>
					</li>
					<li>
						<iframe class="album" src="https://bandcamp.com/EmbeddedPlayer/album=3081933480/size=large/bgcol=333333/linkcol=2ebd35/minimal=true/transparent=true/" seamless><a href="http://1971canada.bandcamp.com/album/s-t">Law of Club and Fang by 1971</a></iframe>
						<p class="album-title">Law of Club and Fang</p>
						<p class="album-year">2012</p>
					</li>
					<li>
						<iframe class="album" src="https://bandcamp.com/EmbeddedPlayer/album=1443907012/size=large/bgcol=333333/linkcol=2ebd35/minimal=true/transparent=true/" seamless><a href="http://1971canada.bandcamp.com/album/s-t">Demo by 1971</a></iframe>
						<p class="album-title">Demo</p>
						<p class="album-year">2011</p>
					</li>
				</ul>
			</section>
			
			<section id="shows" class="container">
				<a href="http://www.songkick.com/artists/8144908" class="songkick-widget" data-theme="dark" data-font-color="#EEEEEE" data-background-color="transparent" data-other-artists="on"></a>
				<script src="//widget.songkick.com/widget.js"></script>
			</section>
			
			<section id="merch" class="container">
				merch
			</section>
			
			<section id="contact" class="container">
				contact
			</section>
		</div>
		
		<footer>
			
		</footer>
		
		<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script>
			$window = $(window);
			$title = $('h1');
			$titleSpan = $('h1 span');
			$nav = $('nav');
			
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
				
				ev.preventDefault();
			}).trigger('hashchange');
			
			$window.on('scroll', function(ev) {
				var windowHeight = $window.height();
				var percent = $window.scrollTop() / (windowHeight - $nav.height());
				
				if (percent >=1) {
					$nav.addClass('nav-sticky');
					
				} else {
					$nav.removeClass('nav-sticky');
				}
				
				
				$title.css('background-position', '0% ' + (percent * (-windowHeight / 4)) + 'px');
				$titleSpan.css('margin-top', (percent * -windowHeight) + 'px');
				$titleSpan.css('opacity', 1 - percent * 2);
			}).trigger('scroll');
		</script>
	</body>
</html>
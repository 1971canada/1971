<!DOCTYPE html>
<html lang="en">
	<head>
		<title>1971</title>
		
		<link href='http://fonts.googleapis.com/css?family=Fjalla+One|Rokkitt:400,700|Titillium+Web:400,600,700,300,200' rel='stylesheet' type='text/css'>
		<style type="text/css">
			html {
				box-sizing: border-box;
			}
			
			*, *:before, *:after {
				box-sizing: inherit;
				margin:0;
				padding:0;
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
			
			header {
				width:100%;
				background-image:url(img/woods.png);
				background-size:cover;
				text-align:center;
				border-top:10px solid #666;
			}
			
			nav {
				background:rgba(0, 0, 0, 0.5);
				font-size:1rem;
			}
			
			nav ul li {
				list-style:none;
				display:inline-block;
			}
			
			nav ul li a {
				display:inline-block;
				padding:10px 15px;
			}
			
			h1 {
				padding:50px 0;
				font-size:6rem;
				font-family:'Rokkitt', serif;
				font-family:'Fjalla One', sans-serif;
				
			}
			
			.container {
				max-width:640px;
				margin:0 auto;
				padding:15px;
				display:none;
			}
			
			.container:first-child {
				display:block;
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
		<header>
			<h1>1971</h1>
			
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
				shows
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
		
		<script>
			window.onhashchange = function(ev) {
				var $sections = document.querySelectorAll('.content section');
				
				for (var i = 0; i < $sections.length; i++) {
					var $section = $sections[i];
					
					if (window.location.hash.indexOf($section.id) != -1) {
						$section.style.display = 'block';
					} else {
						$section.style.display = 'none';
					}
				}
			};
		</script>
	</body>
</html>
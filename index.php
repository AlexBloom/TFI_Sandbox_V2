 <?php include_once 'inc/head.inc' ?>

		<!-- Custom Meta Info for Each Page Here -->
		<!--Web/SEO -->
		        <title>TFI Sandbox</title>
		        <meta name="description" content="TFI Sandbox is an initiative of the Tribeca Film Institute's New Media Fund. Bringing storytelling, technology and design together to innovate in the field, inspire audiences and create impact."/>
				<link rel="canonical" href="http://sandbox.tribecafilminstitute.org/" />
				
		<!--Facebook -->
				<meta property="og:title" content="TFI Sandbox"/>
				<meta property="og:description" content="Adventures in storytelling, technology and social change." />
				<meta property="og:image" content="http://sandbox.tribecafilminstitute.org/img/content/sandbox.jpg"/>
				<meta property="og:url" content="http://sandbox.tribecafilminstitute.org/"/>
		<!--Twitter -->
				<meta name="twitter:card" content="summary"/>
				<meta name="twitter:site" content="@TribecaFilmIns">
				<meta name="twitter:title" content="TFI Sandbox"/>
				<meta name="twitter:description" content="Adventures in storytelling, technology and social change."/>
				<meta name="twitter:image" content="http://sandbox.tribecafilminstitute.org/img/content/sandbox.jpg"/>
				<meta name="twitter:url" content="http://sandbox.tribecafilminstitute.org/" />

<?php include_once 'inc/header.inc' ?>

<!-- Index Page -->
<section id="main">
	<section id="home-video-container" class="full-screen">
		<div class="overlay-wrap">
			<div class="floating-text" id="floating-text-home">
				
				<h1>Adventures in storytelling,<br> technology and social change</h1>
				<p class="intro"> Bringing storytelling, technology and design together to innovate in the field, inspire audiences and create impact.</p>
				<button class="play-video" id="play-home"> <span class="icon icon-play"></span> </button>
			
			</div>
			 
		</div>
		<a class="next-section" id="" href="#about"> Learn More <br> <span class="icon-down"></span> </a>
		<div class="video-overlay" id="video-1">
			<div class="video-inner">
				<button class="close-video" id="close-home"> <span class="icon icon-close"></span> </button>		
			<iframe id="vimeoPlayer" src="//player.vimeo.com/video/110588136?byline=0&amp;portrait=0&amp;color=ffffff&amp;api=1&amp;player_id=vimeoPlayer" 
			width="100%" 
			height:"100%" 
			frameborder="0" 
			webkitallowfullscreen mozallowfullscreen allowfullscreen>
			</iframe>
			</div>
		</div>
		
		<video class="background-video" id="home-bg" autoplay loop muted>
			<source src="video/mobile/HomepageLoop_<?php $random = rand(1,3); echo $random; ?>-Mobile.mp4" type="video/mp4"/>
			<source src="video/mobile/HomepageLoop_<?php $random = rand(1,3); echo $random; ?>-Mobile.ogg" type="video/mp4"/>
		</video>

	</section>
	<section id="about">
		<article>
			<section class="content">
			<p class="intro">
				We continue to be excited and inspired by the growing field of interactive storytelling. We started working with the Ford Foundation on the TFI New Media Fund in 2011. Since then we have been funding projects as well as growing the community around this work through Tribeca Hacks and TFI Interactive Day. This second iteration of the Sandbox is all about sharing the projects, people we have met and all the things we have learned along the way. Dive in.
			</p>
		
			<ul class="three-columns clearfix" id="home-callouts">
				<li>
					<a href="discover">
						<img src="img/ui/discover_icon.gif"/>
						  <h3>Discover</h3>
					</a>
					<p>Discover inspiring interactive projects.<br><br><br></p>
					
					<ul class="home-links clearfix">
						<li> <a href="tfi-new-media-fund">TFI New Media Fund <span class="icon-right"></span> </a> </li>
						<li> <a href="interactive-landscape">Interactive Landscape <span class="icon-right"></span> </a> </li>
					</ul>
				</li>
		
				<li>
					<a href="participate">
						<img src="img/ui/participate_icon.gif"/>
						<h3>Participate</h3>
					</a>
					<p>Participate in TFI’s broad slate of programming that aims to expand the knowledge around interactive storytelling.</p>
					
					<ul class="home-links clearfix">
						<li> <a href="tfi-interactive">TFI Interactive <span class="icon-right"></span> </a> </li>
						<li> <a href="tribeca-hacks">Tribeca Hacks <span class="icon-right"></span> </a> </li>
						<li> <a href="education">Education <span class="icon-right"></span> </a> </li>
					</ul>
				</li>
		
				<li>
					<a href="build">
						<img src="img/ui/build_icon.gif"/>
						<h3>Build</h3>
					</a>
					<p>Tools, resources and advice to build your own interactive project.<br<br></p>
					
					
					<ul class="home-links clearfix">
						<li> <a href="project-management"> Project Management <span class="icon-right"></span> </a> </li>
						<li> <a href="tech-resources">Tech Resources <span class="icon-right"></span> </a> </li>
						<li> <a href="funding">Funding <span class="icon-right"></span> </a> </li>
						<li> <a href="festivals">Festivals <span class="icon-right"></span> </a> </li>
						<li> <a href="impact">Impact <span class="icon-right"></span> </a> </li>
					</ul>
				</li>
			</ul>
		</section>	
		</article>
	

	</section>
	
	<?php include_once 'inc/sharenav.inc' ?>
	
<section>	
<!-- End Index Page --> 

	 
<?php include_once 'inc/footer.inc' ?>

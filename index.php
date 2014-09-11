<?php include_once 'inc/head.inc' ?>

<!-- Custom Meta Info Here -->
<link rel="canonical" href="http://www.sandbox.tribecafilminstitute.org/tfi-new-media-fund/2014" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="TFI New Media Fund - 2014 Funded Projects - TFI Sandbox" />
<meta property="og:description" content="The TFI New Media Fund is a grant for filmmakers pushing the boundaries of traditional filmmaking and documentary work." />

<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<meta name="google-site-verification" content="">

<meta property="article:author" content="https://www.facebook.com/TribecaFilmInstitute"/>
<meta name="twitter:card" value="summary">
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="TFI Sandbox" />
<meta name="twitter:title" content="Title of Page" />
<meta name="twitter:description" content="Description of Page" />
<meta name="twitter:image" content="https://imagelink.jpg" />
<meta name="twitter:url" content="page url" />

<meta property="og:url" content="http://www.sandbox.tribecafilminstitute.org/tfi-new-media-fund/2014" />
<meta property="og:site_name" content="TFI Sanxbox" />
<meta property="article:published_time" content="2014-02-04T21:43:55+00:00" />
<meta property="article:modified_time" content="2014-02-07T19:41:37+00:00" />
<meta property="og:image" content="http://www.sandbox.tribecafilminstitute.org/tfi-new-media-fund/2014/" />

<meta property="fb:admins" content="8228569"/>
<meta name="fb:app_id" content="TFI Sandbox"/>

<?php include_once 'inc/header.inc' ?>

<!-- Index Page -->
<section id="main">
	<section id="home-video-container" class="full-screen">
		<div class="overlay-wrap">
			<div class="floating-text" id="floating-text-home">
				<h1>TFI Sandbox V2.0</h1>
				<button class="play-video" id="play-home"> <span class="icon icon-play"></span> </button>
			</div>
			<a class="next-section" id="" href="#about"> Learn More <br> <span class="icon-down"></span> </a>
		</div>
		<div class="video-overlay" id="video-1">
			<div class="video-inner">
				<button class="close-video" id="close-home"> <span class="icon icon-close"></span> </button>		
			<iframe src="//player.vimeo.com/video/96641498?byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height:"100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
			</iframe>
			</div>
		</div>
		
		<video class="background-video" autoplay loop>
			<source src="video/TFISandboxLoopMobile.mp4" type="video/mp4">
		</video>
	
	</section>
	<section id="about">
		<article>
			<section class="content">
			<p class="intro">
				We continue to be excited and inspired by the growing field of interactive storytelling. We started working with the Ford Foundation on the TFI New Media Fund in 2011. Since then we have been funding projects as well as growing the community around this work through Tribeca Hacks and TFI Interactive.  This second iteration of the Sandbox is all about sharing the projects with you as well many of the people we have met and all the things we have learned along the way. Dive in.
			</p>
		
			<ul class="three-columns clearfix" id="home-callouts">
				<li>
					<h3>Discover</h3>
					<p>In a world of ever changing media creation, more storytellers are curious about interactive approaches.</p>
					<ul class="home-links clearfix">
						<li> <a href="#">TFI New Media Fund <span class="icon-right"></span> </a> </li>
						<li> <a href="#">Interactive Landscape <span class="icon-right"></span> </a> </li>
					</ul>
				</li>
		
				<li>
					<h3>Participate</h3>
					<p>TFI has a broad slate of programming that aims to expand the knowledge around interactivity. Join us!</p>
					<ul class="home-links clearfix">
						<li> <a href="#">TFI Interactive <span class="icon-right"></span> </a> </li>
						<li> <a href="#">Tribeca Hacks <span class="icon-right"></span> </a> </li>
						<li> <a href="#">Education <span class="icon-right"></span> </a> </li>
					</ul>
				</li>
		
				<li>
					<h3>Build</h3>
					<p>In a world of ever changing media creation, more storytellers are curious about creating interactive content but don’t know how to build. Here, we’ve combined information from leading new media creators on how to start, build and sustain these projects.</p>
					<ul class="home-links clearfix">
						<li> <a href="#"> Project Management <span class="icon-right"></span> </a> </li>
						<li> <a href="#">Tech Resources <span class="icon-right"></span> </a> </li>
						<li> <a href="#">Funding <span class="icon-right"></span> </a> </li>
						<li> <a href="#">Festivals <span class="icon-right"></span> </a> </li>
						<li> <a href="#">Impact <span class="icon-right"></span> </a> </li>
					</ul>
				</li>
			</ul>
		</section>	
		</article>
	

	</section>
	
	<nav class="share">
		<div id="share-engage"> <span class="icon icon-share"> </span> SHARE  </div>
		
		<ul id="share-buttons" class="clearfix">
			<li class="one-third-first"> 
				<div class="facebook" id="shareBtn">			 
					 <span class="icon icon-facebook"> </span> Facebook
				</div>
			</li>		
			<li class="one-third-second"> 
				<a href="https://twitter.com/share?&via=TribecaFilmIns&hashtags=TFISandbox&text=TFISandbox" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
				<div class="twitter"> 										
					 
						<span class="icon icon-twitter"> Tweet 
					
				</div>
				</a>	
			</li>
			<li class="one-third-third"> 
				<a href="https://plus.google.com/share?url={http://tribecafilminstitute.org}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
				<div class="google"> 
					
						<span class="icon icon-google"> </span> Google
					 
				</div>
				</a> 			
			</li>
			
		</ul>
		

		
		<script>
		document.getElementById('shareBtn').onclick = function() {
		  FB.ui({
		    display: 'popup',
		    method: 'share',
		    // href: 'https://developers.facebook.com/docs/',
		  }, function(response){});
		}
		</script>
		
	</nav>
	
<section>	
<!-- End Index Page --> 
	 
<?php include_once 'inc/footer.inc' ?>

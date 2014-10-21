 <?php include_once 'inc/head.inc' ?>

		<!-- Custom Meta Info for Each Page Here -->
		<!--Web/SEO -->
		        <title>TFI Sandbox</title>
		        <meta name="description" content="TFI Sandbox is an initiative of the Tribeca Film Institute's New Media Fund. Bringing storytelling, technology and design together to innovate in the field, inspire audiences and create impact."/>
				<link rel="canonical" href="http://sandbox.tribecafilminstitute.org" />
				
		<!--Facebook -->
				<meta property="og:title" content="Title of Page"/>
				<meta property="og:description" content="Description of Page" />
				<meta property="og:image" content="http://sandbox.tribecafilminstitute.org/img/content/sandbox.jpg"/>
				<meta property="og:url" content="http://sandbox.tribecafilminstitute.org/"/>
		<!--Twitter -->
				<meta name="twitter:card" content="summary" />
				<meta name="twitter:site" content="@TribecaFilmIns">
				<meta name="twitter:title" content="Title of Page"/>
				<meta name="twitter:description" content="Description of Page"/>
				<meta name="twitter:image" content="http://sandbox.tribecafilminstitute.org/img/content/sandbox.jpg"/>
				<meta name="twitter:url" content="http://sandbox.tribecafilminstitute.org/" />

<?php include_once 'inc/header.inc' ?>

<!-- Index Page -->

<nav class="breadcrumb">
	<ul><li> <a href="discover"> <span class="icon-discover"></span> <span class="breadcrumb-text">Discover</span> </a> </li>
	</ul>
</nav>

<section id="main">
<article>
	<header>
		<h1>Discover</h1>
	</header>
	

	
	<section class="content">
		<ul class="buttonlist two clearfix">
			<li> 
				 <a href="tfi-new-media-fund"> TFI New Media Fund </a>
			</li>
			<li> 
				 <a href="interactive-landscape"> Interactive Landscape </a>
			</li>
		</ul>
		
		<p>While gathering contributions for this new edition of Sandbox, I started to feel excited and somehow helpless. I was overwhelmed by the multitude of ground-breaking technologies and platforms that are created as well as the profusion of compelling stories that are told; and many more imaginative ways to create impact and engage audiences, offering a fully interactive and sometimes even immersive experience. When and where does it end? How does one embrace the whole field? Impossible! </p> 
		<p>
			That’s part of the beauty and the magic of the interactive storytelling landscape. How can we expect to find clear limits when we constantly ask creators to push the boundaries? Feeling helpless can actually be a good way to approach interactive and cross-platform projects:  it makes you humble, curious and open to new experiences.</p>

		<p>Rather than trying to define the boundaries of this ever-changing field, we proposed an overview of engaging, interactive and innovative projects we funded, projects we liked, projects people we like liked, knowing that there is an infinite number of inspiring projects out there that we could have talked about. How exciting!</p>
		<p>So, please enjoy, create and innovate!</p>

		<p>Amelie Leenhardt,<br>
		   Program Coordinator, Interactive<br>
		   Tribeca Film Institute</p>
	</section>
</article>


	
	<nav class="share">
		<div id="share-engage"> <span class="icon icon-share"> </span> SHARE  </div>
		
		<ul id="share-buttons" class="clearfix">
			<li class="one-third-first"> 
				
				<!-- <div id="shareBtn" class="btn btn-success clearfix">Share Dialog</div> -->
				
				<div class="facebook btn btn-success" id="shareBtn">
					 <span class="icon icon-facebook"> </span> Facebook
				</div>
				
				<!-- <div class="fb-share-button" data-href="http://sandbox.tribecafilminstitute.org"></div> -->
				
			</li>		
			<li class="one-third-second"> 
				<a href="https://twitter.com/share?&via=TribecaFilmIns&hashtags=TFISandbox&text=TFISandbox" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
				<div class="twitter"> 										
						<span class="icon icon-twitter"> Tweet 
				</div>
				</a>	
			</li>
			<li class="one-third-third"> 
				<a href="https://plus.google.com/share?url={http://sandbox.tribecafilminstitute.org}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
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
		    href: 'http://sandbox.tribecafilminstitute.org/',
		  }, function(response){});
		}
		</script>
			
			
	</nav>
	
<section>	
<!-- End Index Page --> 
	 
<?php include_once 'inc/footer.inc' ?>

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
	<ul><li> <a href="participate"> <span class="icon-participate"></span> <span class="breadcrumb-text">Participate</span> </a> </li>
	</ul>
</nav>

<section id="main">
<article>
	<header>
		<h1>Participate</h1>
	</header>
	<section class="content">
		<ul class="buttonlist three clearfix">
			<li> 
				 <a href="tfi-interactive"> TFI Interactive </a>
			</li>
			<li> 
				 <a href="tribeca-hacks"> Tribeca Hacks </a>
			</li>
			<li> 
				<a href="education"> Education </a>
			</li>
		</ul>
		<p>We were thinking about how our work with the Fund fits into the wider digital media ecosystem, and about what we can learn from people who are thinking hard about some of the same problems we are thinking about: how to bring filmmakers and technologists together to create new kinds of work; how to capture the attention of audiences in a highly media-saturated environment and truly engage them; how to innovate while still making sure that the story leads; and how to bring craft and skill to interactive storytelling, building new kinds of experiences that are rich, immersive and compelling. TFI Interactive and the Interactive Playground is the result of this.</p>

		<p>Discover what happens at Tribeca Hacks, when storytellers, developers and designers come together to create prototypes over just a few days. These hackathons and workshops give creative media artists the insight and skills to create robust interactive projects that effectively engage with audiences and the chance to experiment with new tools and technologies. They also showcase innovation in this field for artists, funders and the public. A primary goal of Tribeca Hacks is to build new relationships between media artists, technologists and designers.</p>

		<p>Ingrid Kopp<br>
							Director, Interactive<br>
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

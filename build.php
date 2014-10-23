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
	<ul><li> <a href="build"> <span class="icon-build"></span> <span class="breadcrumb-text">Build</span> </a> </li>
	</ul>
</nav>

<section id="main">
<article>
	<header>
		<h1>Build</h1>
	</header>
	
	<section class="content">
		
		<ul class="buttonlist two clearfix">
			<li> 
				 <a href="project-management"> Project Management </a>
			</li>
			<li> 
				 <a href="tech-resources"> Tech Resources </a>
			</li>
		</ul>
		<ul class="buttonlist three clearfix">
			<li> 
				 <a href="funding"> Funding </a>
			</li>
			<li> 
				 <a href="festivals"> Festivals </a>
			</li>
			<li> 
				 <a href="impact"> Impact </a>
			</li>
		</ul>
		
		<p>In a highly-competitive world of ever changing media creation, more storytellers are curious about creating interactive content but don’t know how to build. Here, we’ve combined information from leading new media creators on how to start, build and sustain these projects.</p>
		<p>Opeyemi Olukemi<br>
							Manager, Interactive<br>
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

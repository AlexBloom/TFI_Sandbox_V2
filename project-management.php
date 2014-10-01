<?php include_once 'inc/head.inc' ?>

		<!-- Custom Meta Info for Each Page Here -->
		<!--Web/SEO -->
		        <title>TFI Sandbox</title>
		        <meta name="description" content="TFI Sandbox is an initiative of the Tribeca Film Institute's New Media Fund. Bringing storytelling, technology and design together to innovate in the field, inspire audiences and create impact."/>
				<link rel="canonical" href="http://sandbox.tribecafilminstitute.org" />
				
		<!--Facebook -->
				<meta property="og:title" content="Title of Page" />
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
	<ul>
		<li> <span class="indicator"> Project Management </span> </li>
	</ul>
</nav>


<section id="main">
	<section class="clearfix">
		<article>
			<header>
				<section class="content">
				<h1>Project Management Guide</h1>
				<p class="intro"> A reference guide to help you effectively plan, build, and launch a successful new media project. Each section contains a quick-read guide and includes case studies from seasoned veterans.
				</p>
				</section>
			</header>	
			<section class="content">
				<ol class="three-columns clearfix" id="projectmanagement-callouts">
					<li><a href="project-management-scoping.php">
						<h2>01.</h2>
						<span class="icon-pm icon-"></span>
						<h5>Scoping</h5>
						<p>Describe project goals and establish your level of effort</p>
						</a>
					</li>
					<li><a href="project-management-timeline.php">
						<h2>02.</h2>
						<span class="icon-pm icon-"></span>
						<h5>Timeline</h5>
						<p>Schedule milestones based on scoping</p>
						</a>
					</li>
					<li><a href="project-management-budget.php">
						<h2>03.</h2>
						<span class="icon-pm icon-"></span>
						<h5>Budget</h5>
						<p>Implement project finances</p>	
						</a>
					</li>
					<li><a href="project-management-team.php">
						<h2>04.</h2>
						<span class="icon-pm icon-"></span>
						<h5>Building a Team</h5>
						<p>Finding the people you need to succeed</p>
						</a>
					</li>
					<li><a href="project-management-distribution.php">
						<h2>05.</h2>
						<span class="icon-pm icon-"></span>
						<h5>Distribution</h5>
						<p>Getting your project to its audience</p>	
						</a>
					</li>
					<li><a href="project-management-prmarketing.php">
						<h2>06.</h2>
						<span class="icon-pm icon-"></span>
						<h5>PR / Marketing</h5>
						<p>Making the public aware of your project</p>	
						</a>
					</li>
					<li><a href="project-management-sustainability.php">
						<h2>07.</h2>
						<span class="icon-pm icon-"></span>
						<h5>Sustainability</h5>
						<p>Supporting the lifespan of your project</p>	
						</a>
					</li>
				</ol>
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

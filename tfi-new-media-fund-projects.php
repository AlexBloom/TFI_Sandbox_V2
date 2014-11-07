<?php
include_once 'inc/head.inc';
require_once 'inc/tfi_ee.inc';

$vars = array_keys($_GET);
$current_year = (int) htmlspecialchars($vars[0]); //sanitize _GET (prevent SQL injection)
$cms = new tfi_ee();
$projects = $cms->get_project_by_year($current_year);
?>

		<!-- Custom Meta Info for Each Page Here -->
		<!--Web/SEO -->
		        <title>TFI Sandbox</title>
		        <meta name="description" content="TFI Sandbox is an initiative of the Tribeca Film Institute's New Media Fund. Bringing storytelling, technology and design together to innovate in the field, inspire audiences and create impact."/>
				<link rel="canonical" href="http://sandbox.tribecafilminstitute.org" />
				
		<!--Facebook -->
				<meta property="og:title" content="TFI Sandbox" />
				<meta property="og:description" content="Description of Page" />
				<meta property="og:image" content="http://sandbox.tribecafilminstitute.org/img/content/sandbox.jpg"/>
				<meta property="og:url" content="http://sandbox.tribecafilminstitute.org/"/>
		<!--Twitter -->
				<meta name="twitter:card" content="summary" />
				<meta name="twitter:site" content="@TribecaFilmIns">
				<meta name="twitter:title" content="TFI Sandbox"/>
				<meta name="twitter:description" content="Description of Page"/>
				<meta name="twitter:image" content="http://sandbox.tribecafilminstitute.org/img/content/sandbox.jpg"/>
				<meta name="twitter:url" content="http://sandbox.tribecafilminstitute.org/" />
				
<?php include_once 'inc/header.inc' ?>

<!-- TFI New Media Fund Page Content -->
<nav class="breadcrumb">
	<ul>
		<li> <a href="discover"> <span class="icon-discover"></span> <span class="breadcrumb-text">Discover</span> </a> </li>
		<li> <a href="tfi-new-media-fund.php"> TFI New Media Fund </a> </li>
		<li>
			<dl class="tertiary">
				<!-- Enter Current Page Name as DT Item Here -->
				<dt> <?=$current_year?> <span class="icon-down"> <span> </dt>
				<dd><a href="tfi-new-media-fund-projects?2014"> 2014 </a> </dd>
				<dd><a href="tfi-new-media-fund-projects?2013"> 2013 </a> </dd>
				<dd><a href="tfi-new-media-fund-projects?2012"> 2012 </a> </dd>
				<dd><a href="tfi-new-media-fund-projects?2011"> 2011 </a> </dd>
			<dl>
		</li>
	</ul>
</nav>



<section id="main" class="">
		
	<article>
	<header>
		<h1>TFI New Media Fund</h1>
		
		<p class="intro"><?=$current_year?> Grantees and Jurors</p>	
		
	</header>
</article>
	<section class="clearfix" id="<?=$current_year?>">		
		
		<ul class="projects">
			<?php if($projects!==false){ ?><!--DB working show some live projects-->
				<?php foreach($projects as $project){ ?>
				<li class="project anchor clearfix" id="<?=$project['url_title']?>">
					<article>
						<header class="project-header" id="">
							<a class="local-link" href="#<?=$project['url_title']?>">
								<div class="project-image-wrap">
									<?php if($project['film_image']!=''){ ?>
										<img src="<?=str_replace('{filedir_3}', 'https://tribecafilminstitute.org/images/uploads/film_files/', $project['film_image'])?>" alt="Project Image">
									<?php } else { ?>
										some thing should go here
									<?php } ?>
								</div>
								<div class="header-info">
									<div class="floating-text">
									<h2><?=$project['title']?></h2>
									<?=$project['film_logline']?>
									</div>
								</div>
							</a>
						</header>
						<section class="project-content">
							<?php
							if(isset($project['project_website'])){
								$link_display = 'Project Website';
								if(trim($project['project_website']['mx_film_link_title'])!='') $link_display = $project['project_website']['mx_film_link_title'];
								echo '<a class="project-url" href="'.$project['project_website']['mx_film_link_url'].'" target=_blank>'.$link_display.' &rarr;</a>';
							}
							?>

							<h3>Team Leaders</h3>
							<ul class="team-leaders clearfix">
								<?php foreach($project['filmmakers'] as $filmmaker){ ?>
								<li>
									<div class="person-portrait">
										<img src="<?=str_replace('{filedir_4}', 'https://tribecafilminstitute.org/images/uploads/filmmaker_files/', $filmmaker['ch_filmmaker_headshot'])?>" alt="<?=$filmmaker['ch_filmmaker_fname'].' '.$filmmaker['ch_filmmaker_lname']?> Portrait"/>
									</div>
									<div class="person-info">
										<h4 class="name"> 
											<strong><?=$filmmaker['ch_filmmaker_fname'].' '.$filmmaker['ch_filmmaker_lname']?></strong> 
											<br><?=$filmmaker['mx_filmmakers_role']?>
										</h4>
										<?=$filmmaker['ch_filmmaker_bio']?>
									</div>
									
								</li>
								<?php }?>
							</ul>		
							<?php
							if(trim($project['film_sandbox'])!='') echo $project['film_sandbox'];
							?>
							
						
				
						</section>
					</article>
				</li>
				<?php } ?>
			<?php } elseif($projects===false){ ?>
				<!--BO show sample-->
				<li class="project anchor clearfix" id="18Days">
					<article>
						<header class="project-header" id="">
							<a class="local-link" href="#18Days">
								<div class="project-image-wrap">
									<img src="img/content/prototype/18days.jpg" alt="Project Image">
								</div>
								<div class="header-info">
									<div class="floating-text">
									<h2>18 Days in Egypt</h2>
									<p> 18DaysinEgypt.com is an interactive documentary project that empowers Egyptians to preserve the incredible social media they created--their on-the-ground, eye-witness accounts--and to add their voice to an important story. </p>			
									</div>
								</div>
							</a>
											
						</header>
						
						<section class="project-content">
							<a class="project-url" href="http://18DaysinEgypt.com"target=_blank>18DaysinEgypt.com &rarr;</a>
							<h3>Team Leaders</h3>
							<ul class="team-leaders clearfix">
								<li>
									<div class="person-portrait">
										<img src="img/content/prototype/person-image.jpg" alt="Michele Stephenson Portrait"/>
									</div>
									<div class="person-info">
										<h4 class="name"> 
											<strong>JIGAR MEHTA</strong> 
											<br>
											Director/Producer/CO-Creator
										</h4>
										<p> Jigar Mehta is responsible for developing and managing the project’s story content. Jigar is a documentary filmmaker and a journalist. He was a John S. Knight Fellow at Stanford University, where he worked on developing tools for collaborative journalism.</p>
									</div>
									
								</li>
								<li>
									<div class="person-portrait">
										<img src="img/content/prototype/person-image.jpg" alt="Michele Stephenson Portrait"/>
									</div>
									<div class="person-info">
										<h4 class="name"> 
											<strong>YASMIN ELAYAT </strong> 
											<br>
											TECHNOLOGIST/CO-CREATOR
										</h4>
										<p> Yasmin Elayat is the lead technologist for the project, primarily responsible for developing the design &amp; vision for 18DaysinEgypt.com and leading the development team. Yasmin is an interaction designer and software developer based in Cairo.</p>
									</div>
									
								</li>
							</ul>		
							
							<h3>Project Update</h3>
							<section class="text-static">
							
								<p><small>Answers by Jigar Mehta (2014)</small></p>
		
								<p><strong>It’s been two years, where are you at?</strong> </p>
		
								<p>We bootstrapped, launched, iterated, failed, launched, iterated, failed, launched. Then collected, collected, collected. It was raw, it was real-time, and it was a new type of documentary storytelling. But  then the story we were covering changed, the climate changed. It felt like a natural “ending” point to our  activities. And now we’re at another pivotal point where it feels right to look back and reflect.</p>
							</section>
							
							<h3>Q&amp;A</h3>
							<section class="text-dynamic">

								<p><small>Answers by Jigar Mehta (2014)</small></p>
							
								<p><strong>What’s one takeaway from the experience of bringing story and technology together?</strong></p>
								<p>Technology is allowing us to shape the next generation of storytelling.</p>

								<p>The objective of 18DaysInEgypt is to be the first living history documentary project created by the people who are living through it and experiencing it first-hand, using their own media. Egyptians documented a revolution in real-time using cellphones, cameras and social media such as Facebook and Twitter. There so many important stories out there about how the events played out in the streets of Egypt and how people were effected. We needed a way to collect all these stories and experiences in a crowd-sourced documentary.</p> 

								<p>In a traditional documentary, we as filmmakers would choose the story to tell. But by using technology to drive the storytelling experience, we could create a new collaborative storytelling platform which would now enable an entire community to be the filmmakers. Everyone is a storyteller on <em>18DaysInEgypt</em>. </p>

								<p>For the first time ever technology is now enabling an ongoing, evolving story. Egypt is still a country in transition and the site continues to build. Our community not only documented the first 18 days of the Egyptian revolution but the first presidential elections, ongoing clashes, new street art movements, rising political players and initiatives in the country. And the story still continues. That’s the power of using technology to drive storytelling - there are no boundaries, your imagination is the limit. It’s a very exciting time to be exploring in this new frontier.</p>

								<p><strong>Has the experience developing your project given you new insights into ways to reach new audiences and or inspire social change?</strong></p>

								<p>With a new form of crowd-sourced documentary, there are many new types of challenges to overcome that are unique to each project. Who are your audiences? How do you engage them? How do you reach them? How do you give your audience enough tools to properly experience your project? How do you teach your contributors new behaviors?</p>

								<p>We learned that the most advantageous way to explore these questions was to be flexible, open to changes and pivots, and iterate quickly and often. There was no blueprint for what we were doing, and so we had to adopt some approaches from the tech-startup world in how we built out the project. We have gone through several iterations of the project, and we put everything out there to test out an idea and learn from the community about what was working and what wasn’t successful.</p>

								<p>Another important lesson is to be aware of the context you are operating in. We built a project that has two main audiences: the Egyptian community and the larger global audience. In Egypt, there is a digital divide due to low-net penetration, approximately 25% of the population is online. We were very aware of this digital divide and our solution was creating an on-the-ground outreach effort which we called the 18DaysInEgypt fellows program. In the fellowship program, we hired and trained students and young citizen journalists who then went out and collected stories from the larger community. It was a very successful non-technical solution to engaging a community in Egypt that wouldn't normally have access to a web-native project.</p>
							
								<p>Creative solutions can lead to new paths and open doors in surprising ways leading to social change. The 18DaysInEgypt fellowship program was so successful it has now grown into a new citizen journalism incubator program called the Egypt Journalism Project which institutionalizes the education and training of young citizen journalists in Egypt. These young storytellers really are the future of Egypt and fulfill the original vision and mission of our project in a way we could never have imagined.</p>
							
							</section>
						
				
						</section>
					</article>
				</li>
				<li class="project anchor clearfix" id="testproject">
					<article>
						<header class="project-header" id="">
							<a class="local-link" href="#testproject">
								<div class="project-image-wrap">
									<img src="img/content/prototype/18days.jpg" alt="18days">
								</div>
								<div class="header-info">
									<div class="floating-text">
									<h2>Test Project</h2>
									<p> Sample Logline </p>			
									</div>
								</div>
							</a>
											
						</header>
						
						<section class="project-content">
							<a class="project-url" href="http://18DaysinEgypt.com"target=_blank>18DaysinEgypt.com &rarr;</a>
							<h3>Team Leaders</h3>
							<ul class="team-leaders clearfix">
								<li>
									<div class="person-portrait">
										<img src="img/content/prototype/person-image.jpg" alt="Michele Stephenson Portrait"/>
									</div>
									<div class="person-info">
										<h4 class="name"> 
											<strong>JIGAR MEHTA</strong> 
											<br>
											Director/Producer/CO-Creator
										</h4>
										<p> Jigar Mehta is responsible for developing and managing the project’s story content. Jigar is a documentary filmmaker and a journalist. He was a John S. Knight Fellow at Stanford University, where he worked on developing tools for collaborative journalism.</p>
									</div>
									
								</li>
								<li>
									<div class="person-portrait">
										<img src="img/content/prototype/person-image.jpg" alt="Michele Stephenson Portrait"/>
									</div>
									<div class="person-info">
										<h4 class="name"> 
											<strong>YASMIN ELAYAT </strong> 
											<br>
											TECHNOLOGIST/CO-CREATOR
										</h4>
										<p> Yasmin Elayat is the lead technologist for the project, primarily responsible for developing the design &amp; vision for 18DaysinEgypt.com and leading the development team. Yasmin is an interaction designer and software developer based in Cairo.</p>
									</div>
									
								</li>
							</ul>		
							
							<h3>Project Update</h3>
							<section class="text-static">
							
								<p><small>Answers by Jigar Mehta (2014)</small></p>
		
								<p><strong>It’s been two years, where are you at?</strong> </p>
		
								<p>We bootstrapped, launched, iterated, failed, launched, iterated, failed, launched. Then collected, collected, collected. It was raw, it was real-time, and it was a new type of documentary storytelling. But  then the story we were covering changed, the climate changed. It felt like a natural “ending” point to our  activities. And now we’re at another pivotal point where it feels right to look back and reflect.</p>
							</section>
							
							<h3>Q&amp;A</h3>
							<section class="text-dynamic">

								<p><small>Answers by Jigar Mehta (2014)</small></p>
							
								<p><strong>What’s one takeaway from the experience of bringing story and technology together?</strong></p>
								<p>Technology is allowing us to shape the next generation of storytelling.</p>

								<p>The objective of 18DaysInEgypt is to be the first living history documentary project created by the people who are living through it and experiencing it first-hand, using their own media. Egyptians documented a revolution in real-time using cellphones, cameras and social media such as Facebook and Twitter. There so many important stories out there about how the events played out in the streets of Egypt and how people were effected. We needed a way to collect all these stories and experiences in a crowd-sourced documentary.</p> 

								<p>In a traditional documentary, we as filmmakers would choose the story to tell. But by using technology to drive the storytelling experience, we could create a new collaborative storytelling platform which would now enable an entire community to be the filmmakers. Everyone is a storyteller on <em>18DaysInEgypt</em>. </p>

								<p>For the first time ever technology is now enabling an ongoing, evolving story. Egypt is still a country in transition and the site continues to build. Our community not only documented the first 18 days of the Egyptian revolution but the first presidential elections, ongoing clashes, new street art movements, rising political players and initiatives in the country. And the story still continues. That’s the power of using technology to drive storytelling - there are no boundaries, your imagination is the limit. It’s a very exciting time to be exploring in this new frontier.</p>

								<p><strong>Has the experience developing your project given you new insights into ways to reach new audiences and or inspire social change?</strong></p>

								<p>With a new form of crowd-sourced documentary, there are many new types of challenges to overcome that are unique to each project. Who are your audiences? How do you engage them? How do you reach them? How do you give your audience enough tools to properly experience your project? How do you teach your contributors new behaviors?</p>

								<p>We learned that the most advantageous way to explore these questions was to be flexible, open to changes and pivots, and iterate quickly and often. There was no blueprint for what we were doing, and so we had to adopt some approaches from the tech-startup world in how we built out the project. We have gone through several iterations of the project, and we put everything out there to test out an idea and learn from the community about what was working and what wasn’t successful.</p>

								<p>Another important lesson is to be aware of the context you are operating in. We built a project that has two main audiences: the Egyptian community and the larger global audience. In Egypt, there is a digital divide due to low-net penetration, approximately 25% of the population is online. We were very aware of this digital divide and our solution was creating an on-the-ground outreach effort which we called the 18DaysInEgypt fellows program. In the fellowship program, we hired and trained students and young citizen journalists who then went out and collected stories from the larger community. It was a very successful non-technical solution to engaging a community in Egypt that wouldn't normally have access to a web-native project.</p>
							
								<p>Creative solutions can lead to new paths and open doors in surprising ways leading to social change. The 18DaysInEgypt fellowship program was so successful it has now grown into a new citizen journalism incubator program called the Egypt Journalism Project which institutionalizes the education and training of young citizen journalists in Egypt. These young storytellers really are the future of Egypt and fulfill the original vision and mission of our project in a way we could never have imagined.</p>
							
							</section>
						
				
						</section>
					</article>
				</li>
				<!--EO show sample-->
			<?php } ?>
		</ul>
	
		<section class="jury" id="">
			<h2>Meet The Jury</h2>
			<ul class="jury-members clearfix">
			<?php
			switch($current_year) {
				case '2014':
					?>
					<li>
						<img src="img/content/discover/new-media-fund/2014/jury/jury_JakeBarton.jpg" alt="Jury JakeBarton">
						<span class="name"> <strong> Jake Barton </strong> <br> Principal &amp; Founder, Local Projects </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2014/jury/jury_SheilaLeddy.jpg" alt="Jury SheilaLeddy">
						<span class="name"> <strong> Sheila Leddy</strong>  <br> Executive Director, The Fledgling Fund </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2014/jury/jury_CharlesMelcher.jpg" alt="Jury CharlesMelcherSmall">
						<span class="name"> <strong>Charles Melcher</strong> <br> Founder &amp; CEO, Melcher Media, Founder &amp; Director, Future of Storytelling </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2014/jury/jury_DawnPorter.jpg" alt="Jury DawnPorter">
						<span class="name"> <strong> Dawn Porter</strong> <br> Founder, Trilogy Films </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2014/jury/jury_HankWillisThomas.jpg" alt="Jury HankWillisThomas">
						<span class="name"> <strong> Hank Willis Thomas</strong> <br>  Photographer </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2014/jury/jury_DeannaZandt.jpg" alt="Jury DeannaZandt">
						<span class="name"> <strong> Deanna Zandt</strong> <br>  Co-Founder/Partner, Lux Digital </span>
					</li>
					<?php
					break;
				case '2013':
					?>
					<li>
						<img src="img/content/discover/new-media-fund/2013/jury/jury_JeremyBoxer.jpg" alt="Jury JeremyBoxer">
						<span class="name"> <strong> Jeremy Boxer</strong> <br> Creative Director, Vimeo </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2013/jury/jury_MichelleByrd.jpg" alt="Jury MichelleByrd">
						<span class="name"> <strong> Michelle Byrd</strong>  <br>  Co-President, Games for Change </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2013/jury/jury_MarisaJahn.jpg" alt="Jury MarisaJahn">
						<span class="name"> <strong> Marisa Jahn</strong> <br>  Executive Director, REV </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2013/jury/jury_TomJennings.jpg" alt="Jury TomJennings">
						<span class="name"> <strong> Tom Jennings</strong> <br>  Producer, 2over10 Media for PBS Frontline </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2013/jury/jury_JuliaKaganskiy.jpg" alt="Jury JuliaKaganskiy">
						<span class="name"> <strong> Julia Kaganskiy</strong> <br>  Global Editor, Creators Project</span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2013/jury/jury_SarahWolozin.jpg" alt="Jury SarahWolozin">
						<span class="name"> <strong> Sarah Wolozin</strong> <br>  Director, MIT Open Documentary Lab </span>
					</li>
					<?php
					break;
				case '2012':
					?>
					<li>
						<img src="img/content/discover/new-media-fund/2012/jury/jury_FrankRose.jpg" alt="Jury FrankRose">
						<span class="name"> <strong> Frank Rose</strong> <br> Author, The Art of Immersion: How the Digital Generation is Remaking Hollywood, Madison Avenue and the Way We Tell Stories </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2012/jury/jury_MarcSchiller.jpg" alt="Jury MarcSchiller">
						<span class="name"> <strong>Marc Schiller </strong> <br> Campfire, Partner & Creative Director  </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2012/jury/jury_AndrewDevigao.jpg" alt="Jury AndrewDevigao">
						<span class="name"> <strong>Andrew DeVigao </strong> <br> Co-founder, A Fourth Act, Chair of Journalism, Innovation and Civic Engagement at University of Oregon’s SOJC  </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2012/jury/jury_SteveCoulson.jpg" alt="Jury SteveCoulson">
						<span class="name">  <strong>Steve Coulson </strong> <br> Founder, Wooster Collective, CEO, BOND Strategy and Influence  </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2012/jury/jury_IanInaba.jpg" alt="Jury IanInaba">
						<span class="name">  <strong>Ian Inaba </strong> <br> Filmmaker, Executive Director, Citizen Engagement Lab  </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2012/jury/jury_AinaAbiodun.jpg" alt="Jury AinaAbiodun">
						<span class="name"> <strong>Aina Abiodun </strong> <br>Co-Founder, StoryCode   </span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2012/jury/jury_LinaSrivastava.jpg" alt="Jury LinaSrivastava">
						<span class="name"><strong>Lina Srivastava  </strong> <br> Strategist, Activist, Transmedia Designer, Writer  </span>
					</li>
					<?php
					break;
				case '2011':
					?>
					<li>
						<img src="img/content/discover/new-media-fund/2011/jury/jury_CaitlinBurns.jpg" alt="Jury CaitlinBurns">
						<span class="name"> <strong> Caitlin Burns </strong> <br>
						Transmedia Producer, Board Member of the PGA’s New Media Council
						</span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2011/jury/jury_IditHarelCaperton.jpg" alt="Jury IditHarelCaperton">
						<span class="name"> <strong> Idit Harel Caperton </strong> <br>
						Worldwide Workshop, MaMaMedia
						</span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2011/jury/jury_AaronKoblin.jpg" alt="Jury AaronKoblin">
						<span class="name"> <strong> Aaron Koblin </strong> <br> 
						Digital Media Artist
					</span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2011/jury/jury_MichaelLevine.jpg" alt="Jury MichaelLevine">
						<span class="name"> <strong> Michael Levine </strong> <br> 
						Founding Director, Joan Ganz Cooney Center
					</span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2011/jury/jury_JohnJohnson.jpg" alt="Jury JohnJohnson">
						<span class="name"> <strong> John Johnson </strong> <br> 
						Founder & Executive Director, Harmony Institute, Founder & Chair, EYEBEAM, Co-Founder, Buzzfeed
					</span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2011/jury/jury_JasonLiebman.jpg" alt="Jury JasonLiebman">
						<span class="name"> <strong> Jason Liebman  </strong> <br> 
						Co-Founder, Howcast
					</span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2011/jury/jury_LauraPoitras.jpg" alt="Jury LauraPoitras">
						<span class="name"> <strong> Laura Poitras </strong> <br> 
						Documentary Filmmaker
						</span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2011/jury/jury_SamPollard.jpg" alt="Jury SamPollard">
						<span class="name"> <strong> Sam Pollard </strong> <br> 
						Producer, Editor, Professor, NYU
					</span>
					</li>
					<li>
						<img src="img/content/discover/new-media-fund/2011/jury/jury_MarcSchiller.jpg" alt="Jury MarcSchiller">
						<span class="name"> <strong> Marc Schiller </strong> <br> 
						Founder, Wooster Collective, CEO, BOND Strategy and Influence
					</span>
					</li>
					<?php
					break;
			}
			?>
			</ul>
		</section>

		<nav class="share">
			<div id="share-engage"> <span class="icon icon-share"> </span> SHARE  </div>
			
			<ul id="share-buttons" class="clearfix">
				<li class="one-third-first"> <div class="facebook"> <span class="icon icon-facebook">  </span> Share </div> </li>
				<li class="one-third-second"> <div class="twitter"> <span class="icon icon-twitter">  </span> Tweet</div> </li>
				<li class="one-third-third"> <div class="google"> <span class="icon icon-google"> </span> Google </div> </li>
			</ul>
		</nav>
		
	</section>
	

	
</section>

<!-- End Project Page -->
    
<?php include_once 'inc/footer.inc' ?>

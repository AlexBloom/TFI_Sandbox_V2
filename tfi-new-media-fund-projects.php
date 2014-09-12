<?php
include_once 'inc/head.inc';
require_once 'inc/tfi_ee.inc';

$vars = array_keys($_GET);
$current_year = (int) htmlspecialchars($vars[0]); //sanitize _GET (prevent SQL injection)
$cms = new tfi_ee();
$projects = $cms->get_project_by_year($current_year);
?>

<!-- Custom Meta Info Here -->
<link rel="canonical" href="http://www.sandbox.tribecafilminstitute.org/tfi-new-media-fund/2014" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="TFI New Media Fund - 2014 Funded Projects - TFI Sandbox" />
<meta property="og:description" content="The TFI New Media Fund is a grant for filmmakers pushing the boundaries of traditional filmmaking and documentary work." />
<meta property="og:url" content="http://www.sandbox.tribecafilminstitute.org/tfi-new-media-fund/2014" />
<meta property="og:site_name" content="TFI Sanxbox" />
<meta property="article:published_time" content="2014-02-04T21:43:55+00:00" />
<meta property="article:modified_time" content="2014-02-07T19:41:37+00:00" />
<meta property="og:image" content="http://www.sandbox.tribecafilminstitute.org/tfi-new-media-fund/2014/" />

<?php include_once 'inc/header.inc' ?>

<!-- TFI New Media Fund Page Content -->
<nav class="breadcrumb">
	<ul>
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
			<?php foreach($projects as $project){ ?>
			<li class="project anchor clearfix" id="project_<?=$project['url_title']?>">
				<article>
					<header class="project-header" id="">
						<a class="local-link" href="#project_<?=$project['url_title']?>">
							<div class="project-image-wrap">
								<img src="<?=str_replace('{filedir_3}', 'https://tribecafilminstitute.org/images/uploads/film_files/', $project['film_image'])?>" alt="Project Image">
							</div>
							<div class="header-info">
								<div class="floating-text">
								<h2><?=$project['title']?></h2>
								<?=$project['film_logline']?>
								</div>
							</div>
						</a>
						<a class="project-url" href="http://18DaysinEgypt.com"target=_blank>18DaysinEgypt.com &rarr;</a>				
					</header>
					
					<section class="project-content">
					
						<h3>Team Leaders</h3>
						<ul class="team-leaders clearfix">
							<?php foreach($project['filmmakers'] as $filmmaker){ ?>
							<li>
								<div class="person-portrait">
									<img src="<?=str_replace('{filedir_4}', 'https://tribecafilminstitute.org/images/uploads/filmmaker_files/', $filmmaker['ch_filmmaker_headshot'])?>" alt="Michele Stephenson Portrait"/>
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
			<?php } ?>
		</ul>
		
		<?php
		switch($current_year) {
			case '2014':
				?>
				<section class="jury" id="">
					<h2>Meet The Jury</h2>
					<ul class="jury-members clearfix">
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Michele Stephenson Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br> Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong>  <br>  Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
						</li>
					</ul>
				</section>
				<?php
				break;
			case '2013':
				?>
				<section class="jury" id="">
					<h2>Meet The Jury</h2>
					<ul class="jury-members clearfix">
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Michele Stephenson Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br> Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong>  <br>  Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
						</li>
					</ul>
				</section>
				<?php
				break;
			case '2012':
				?>
				<section class="jury" id="">
					<h2>Meet The Jury</h2>
					<ul class="jury-members clearfix">
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Michele Stephenson Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br> Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong>  <br>  Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
						</li>
					</ul>
				</section>
				<?php
				break;
			case '2011':
				?>
				<section class="jury" id="">
					<h2>Meet The Jury</h2>
					<ul class="jury-members clearfix">
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Michele Stephenson Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br> Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong>  <br>  Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
						</li>
						<li>
							<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
							<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
						</li>
					</ul>
				</section>
				<?php
				break;
		}
		?>
		
		<nav class="share">
			<div id="share-engage"> <span class="icon icon-share"> </span> SHARE  </div>
			
			<ul id="share-buttons" class="clearfix">
				<li class="one-third-first"> <div class="facebook"> <span class="icon icon-facebook">  </span> Share </div> </li>
				<li class="one-third-second"> <div class="twitter"> <span class="icon icon-twitter">  </span> Tweet</div> </li>
				<li class="one-third-third"> <div class="google"> <span class="icon icon-google"> </span> Google </div> </li>
			</ul>
		</nav>
		
	</section>
	<!-- <section class="clearfix" id="2013">
		<ul class="projects">
		<li class="project anchor clearfix" id="project-6">
			<article>
				<header class="project-header" id="">
					<a class="local-link" href="#project-6">
						<div class="project-image-wrap">
							<img src="img/content/prototype/project-image.jpg" alt="Project Image">
						</div>
						<div class="overlay-wrap">
							<div class="floating-text">
								<h2>Action Switchboard </h2>
							</div>
						</div>
					</a>
					<a class="project-url" href="#">Project 6 URL &rarr;</a>
				</header>
				<section class="project-content">

					Did you experience any challenges in bringing story, design and technology together? If so, please describe. (400 words maximum)

					Our biggest challenge in the development of the Action Switchboard has been replicating the process of brainstorming, creating, and launching creative political actions, which are central to the Yes Men tactics documented in the film. These processes are by nature intuitive and messy and for those going through the process for the first time, it can seem daunting.

					In reality, creative action development is nonlinear–we go back and forth from brainstorming to drawing board to production throughout the entire course of a project. But to make this process accessible and replicable, the Action Switchboard, by design, must present it as a linear narrative, often simplifying what is otherwise complex.

					In order to do this without reducing the value of a dynamic process, a section of the Action Switchboard is devoted to our Cookbook. This will be a series of articles and videos that catalogues the collective wisdom we’ve accumulated over our years of mischief, and that will continue to reflect lessons learned in new schemes for sharing with the entire Action Switchboard community. We will also offer users outtakes and extended scenes from The Yes Men Are Revolting to further illustrate the behind-the-scenes work that goes into producing a successful media action. Additionally, the project–or “scheme”–pages themselves will tell the stories of the actions featured in the film. We’ve designed these scheme pages so that participants can not only ask for help on their own projects but also record the process of creation for others to learn from and expand on.

					To further address our teaching challenge, we’ve also made sure that the Action Switchboard is based primarily on human interaction, with Yes Lab facilitators (or “Switchboard Operators”) overseeing many elements of the platform. In order for actions to happen, real live human beings review a proposal and communicate directly with the participants. While we are stockpiling our advice in written form, we are also developing a system of facilitation that will help guide schemes towards the light of day.



					Why did you choose to build your story the way you did and how does it engage with the audience in a unique way? (400 words maximum)


					The Yes Men Are Revolting connects audiences with the personal lives of the Yes Men, compelling characters and veteran activists who bring humor, joy, and art into their struggle for a better world. We follow Mike and Andy as they pull off outrageous interventions for environmental justice while overcoming difficult internal and interpersonal struggles. The story sheds light on how we can all find the will to keep on fighting; as our climate changes and we inch closer to an unknown future, we’ll need everyone to pitch in.

					The film’s hilarious personal story ends with an urgent call to action—and with an exceptional new tool, the Action Switchboard, that will help viewers answer that call. This digital platform allows anyone to initiate and join direct actions to hold powerful institutions accountable for environmental abuses; it also provides in-depth training and resources to help put important issues into the spotlight. The Action Switchboard invites the film's audience to join in the story of the film and extend it in new and powerful ways.

					The media actions featured in the film are not created in a vacuum. Masterminding public spectacles, crashing conferences, and creating fake websites would just be flashes in the pan without the work of other campaigners and activists, who use the momentum these actions generate to make real change. The Action Switchboard allows the film’s audience to learn more about each of the actions featured in the film, as well as many additional actions, and to connect directly with NGOs fighting for issues they care about. They are also offered a chance to connect with new partners and instigate actions on their own, with guidance from our veteran facilitators.

					By allowing the audience to engage with the same stories they saw in the film on the Action Switchboard and see how others are building their own actions, we demystify the process of creation and invite them to get involved–and then share their own transformative process with the world. We built the platform to encourage a snowballing of enthusiasm and political action.


					How did the integrated cross-platform or interactive component help engage and activate audiences? (400 words maximum)

					The Yes Men Are Revolting ends with an urgent call to action and a new tool to answer that call. The Action Switchboard (ASB) is designed to harness the energy and interest the film generates to instigate an explosion of real-world creative action in the streets around the world. The ASB forms the backbone of our impact strategy, which also includes flagship screenings in major cities, targeted screenings for frontline communities, and independent self-organized Yes Clubs. In each case, our goal is to use the film to convert audience members to active ASB users, contributing time and resources to new creative actions.

					Alongside facilitating independent schemes, one of the major aims of the ASB is to connect users with NGOs that share their concerns, and allow NGOs to promote campaigns on our platform. Our impact strategy for the film will do the same, focusing on building connections between audience members and NGOs working to address urgent local issues. By facilitating the creation of a Smart Network -- a dense core of overlapping activist groups surrounded by a periphery of supporters -- the ASB adapts a critical aspect of activists’ success, person-to-person relationships, to a digital space to generate world-changing projects on a massive scale.


				</section>
			</article>
		</li>
		<li class="project anchor clearfix" id="project-6">
			<article>
				<header class="project-header" id="">
					<a class="local-link" href="#project-6">
						<div class="project-image-wrap">
							<img src="img/content/prototype/project-image.jpg" alt="Project Image">
						</div>
						<div class="overlay-wrap">
							<div class="floating-text">
								<h2>ChasingTheSun</h2>
							</div>
						</div>
					</a>
					<a class="project-url" href="#">Project 6 URL &rarr;</a>
				</header>
				<section class="project-content">

						•	How do you envision to bring story, design and technology together?
						•	What are you looking to achieve by building out your story this way?

					----

					Our approach to storytelling has always been to find the story first. 

					We break the overall narrative into interesting, meaningful, emotional pieces. Our main intent is to create an immersive experience in a digital space - an area that typically challenges true immersion and concentration. 

					Technology is the vehicle through which the narrative is delivered, but since it can also serve as a distraction, we spend time making the technology serve the overall narrative, and hopefully, disguising or otherwise making the mechanism invisible. Much of this is taking the more out-of-the-box technical solutions and bending them a bit to make them do the things our storytelling requires. 

					Our design and aesthetic are another way we attempt to mitigate the challenges posed by a digital space, which by its nature is cold, perfect, almost inhuman; we ask ourselves constantly - can we craft something that is by turns beautiful, memorable, powerful? If we can do all this, our connection to an audience can become meaningful, and our story can become their story. 





				</section>
			</article>
		</li>




		Updates on your project description on
		TFI
		 Website.

		Using the power of the 12-year longitudinal documentary AMERICAN
		PROMISE as a launching pad, the Promise Tracker mobile app and project website empowers parents and caregivers with strategies
		 to narrow the racial achievement gap in education. Backed by research and a proven methodology, the app allows parents and caregivers to set, monitor, and share goals that support and improve children’s social, emotional, and academic well-being.
		In addition to the Promise Tracker, the American Promise website was created as a space to connect, communicate, and build with key stakeholders. It integrates
		 user polling, extensive unseen video content from the film, resources, and tools that help individuals take action and remain connected to the film its story.

		The site and app are part of the broader community engagement campaign designed by the AMERICAN PROMISE documentary team.
		The	film follows two African-American
		 boys and their families for 12 years as they navigate the terrain of race, privilege and opportunity at a rigorous New York City private school.
		 The campaign mobilizes families, educators, and young people to participate in conversations and actions that better serve black boys and ensure that all young people are equipped with the same opportunities for excellence.
		Since its debut and award at Sundance 2013, the film has been released theatrically in over 40 cities, had a successful broadcast premiere on POV with unprecedented viewership, and received over 1400 screening requests. The filmmakers have published a companion book,
		Promises Kept, and continue to participate in an ambitious engagement campaign that partners with organizations and individuals throughout the country.

		Why did you choose to build your story the way you did and how does it engage with the audience in a unique way? (400 words maximum)
		Americanpromise.org picks up where the film leaves off; providing
		 a practical resource for parents/caregivers to help their sons overcome the education opportunity gap.
		We wanted to create a compelling experience for our audience. We wanted to match the level of intimacy, vulnerability and personal connection that
		 made our film and its story successful, and to provide a place where our target audience could engage, find solutions and be in dialogue with us.

		We conducted extensive research on our target audiences prior to building, exploring the most impactful ways to reach them, and identifying what they needed
		 and would respond to. It was important to meet our viewers where they are, so a digital tool makes sense. Since our film spans 12 years, we had extensive unused footage, and decided to find a creative way to integrate it into our website. Sharing this content
		 online creates an opportunity to be in an ongoing dialogue with visitors.

		How did the integrated cross-platform or interactive component help engage and activate audiences? (400 words maximum)
		We believe it provides another way for individuals to find themselves in this story and connect with it. Since we are trying to reach parents and educators,
		 it is important to be wherever they are. Our cross-platform approach begins with the film, but includes a book, community screenings and events, and digital tools designed for each stakeholder. The approach provides something for everyone. We recognize that
		 in order to be successful, we must reach parents, educators, and young people, and inspire them to join the conversation and share information.
		We are launching the mobile app in the Summer, and hope that it will immediately link our audience members to our campaign, to manageable solutions
		and to one another. Our broader campaign goals target long-term behavior change goals, so interactive elements help us build lasting relationships with
		 audience and easily track their progress over time.



		</ul>

		<section class="jury" id="">
			<h2>Meet The Jury</h2>
			<ul class="jury-members clearfix">
				<li>
					<img src="img/content/prototype/person-image.jpg" alt="Michele Stephenson Portrait"/>
					<span class="name"> <strong> Firstname Lastname</strong> <br> Title / Accolades </span>
				</li>
				<li>
					<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
					<span class="name"> <strong> Firstname Lastname</strong>  <br>  Title / Accolades </span>
				</li>
				<li>
					<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
					<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
				</li>
				<li>
					<img src="img/content/prototype/person-image.jpg" alt="Joe Brewster Portrait"/>
					<span class="name"> <strong> Firstname Lastname</strong> <br>  Title / Accolades </span>
				</li>
			</ul>
		</section>
	</section> -->
	
</section>

<!-- End Project Page -->
    
<?php include_once 'inc/footer.inc' ?>

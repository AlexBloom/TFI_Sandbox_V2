<?php include_once 'inc/head.inc' ?>
<?php include_once 'inc/tfi_ee.inc' ?>

<?php







//load filmmakers
$sql = '
	SELECT
		exp_matrix_data.entry_id,
		exp_matrix_data.row_order,
		';
		foreach($matrix as $id => $name){
			$sql.= 'col_id_'.$id.' AS mx_'.$name.",\n";
		}
		foreach($fields['Filmmakers'] as $id => $f){
			$sql .= 'filmmaker_data.field_id_'.$id.' AS ch_'.$f.",\n";
		}
		$sql.= '
		filmmaker.entry_id AS filmmaker_entry_id,
		filmmaker.title AS filmmaker_title
	FROM exp_matrix_data
		LEFT JOIN exp_playa_relationships ON (exp_playa_relationships.parent_entry_id = exp_matrix_data.entry_id)
 		LEFT JOIN exp_channel_titles      AS filmmaker      ON (exp_playa_relationships.child_entry_id = filmmaker.entry_id)
 		LEFT JOIN exp_channel_data        AS filmmaker_data ON (exp_playa_relationships.child_entry_id = filmmaker_data.entry_id)
	WHERE parent_field_id = 132 AND exp_matrix_data.entry_id IN ('.implode(', ',$project_ids).')
	LIMIT 100
';
//echo $sql; exit;
$res = $db->query($sql);
if(!$res) printf("Errormessage: %s\n", $db->error);
$filmmakers = array();
while ($row = $res->fetch_assoc()) {
	$filmmakers[$row['entry_id']][$row['filmmaker_entry_id']] = $row;
}
$res->free();
//print_r($filmmakers);
//exit;
?>

		<!-- Custom Meta Info for Each Page Here -->
		<!--Web/SEO -->
		        <title>TFI New Media Fund | TFI Sandbox </title>
		        <meta name="description" content="TFI Sandbox is an initiative of the Tribeca Film Institute's New Media Fund. Bringing storytelling, technology and design together to innovate in the field, inspire audiences and create impact."/>
				<link rel="canonical" href="http://sandbox.tribecafilminstitute.org/tfi-new-media-fund" />
				
		<!--Facebook -->
				<meta property="og:title" content="TFI Sandbox | TFI New Media Fund" />
				<meta property="og:description" content="Funding and support to non-fiction, social issue media projects which go beyond traditional screens—integrating film with content across media platforms, from video games, apps, social networks and web." />
				<meta property="og:image" content="http://sandbox.tribecafilminstitute.org/img/content/sandbox.jpg"/>
				<meta property="og:url" content="http://sandbox.tribecafilminstitute.org/tfi-new-media-fund"/>
		<!--Twitter -->
				<meta name="twitter:card" content="summary" />
				<meta name="twitter:site" content="@TribecaFilmIns">
				<meta name="twitter:title" content="TFI Sandbox | TFI New Media Fund"/>
				<meta name="twitter:description" content="Funding and support to non-fiction, social issue media projects which go beyond traditional screens—integrating film with content across media platforms, from video games, apps, social networks and web."/>
				<meta name="twitter:image" content="http://sandbox.tribecafilminstitute.org/img/content/sandbox.jpg"/>
				<meta name="twitter:url" content="http://sandbox.tribecafilminstitute.org/tfi-new-media-fund" />
				
<?php include_once 'inc/header.inc' ?>

<!-- TFI New Media Fund Page Content -->
<nav class="breadcrumb">
	<ul>
		<li> <a href="discover"> <span class="icon-discover"></span> <span class="breadcrumb-text">Discover</span> </a> </li>
		<li> <a href="tfi-new-media-fund.php"> TFI New Media Fund </a> </li>
		<li>
			<dl class="tertiary">
				<!-- Enter Current Page Name as DT Item Here -->
				<dt> 2011 <span class="icon-down"> <span> </dt>
				<dd><a href="tfi-new-media-fund-2014"> 2014 </a> </dd>
				<dd><a href="tfi-new-media-fund-2013"> 2013 </a> </dd>
				<dd><a href="tfi-new-media-fund-2012"> 2012 </a> </dd>
				<dd><a href="tfi-new-media-fund-2011"> 2011 </a> </dd>
			<dl>
		</li>
	</ul>
</nav>



<section id="main" class="">
		
	<article>
		<header>
			<h1>TFI New Media Fund</h1>
		
			<p class="intro">2012 Grantees and Jurors</p>	
		
		</header>
	</article>
	<section class="clearfix" id="2014">		
		<ul class="projects">
			<?php foreach($projects as $project){?>
			<li class="project anchor clearfix" id="<?=$project['url_title']?>-project">
				<article>
					<header class="project-header" id="">
						<a class="local-link" href="#<?=$project['url_title']?>-project">
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
						<a class="project-url" href="#">Project URL <span class="icon-export"></span></a>				
					</header>
					<section class="project-content">
						<p>Project Text</p>
						<strong>Questions </strong>
						<p>Answers and such.</p>
						<h3>Team Leaders</h3>
						<ul class="team-leaders clearfix">
							<?php foreach($filmmakers[$project['entry_id']] as $filmmaker){ ?>
							<li>
								<div class="person-portrait">
									<img src="<?=str_replace('{filedir_4}', 'https://tribecafilminstitute.org/images/uploads/filmmaker_files/', $filmmaker['ch_filmmaker_headshot'])?>" alt="Michele Stephenson Portrait"/>
									
								</div>
								<div class="person-info">
									<h4 class="name"> 
										 <strong><?=$filmmaker['ch_filmmaker_fname'].' '.$filmmaker['ch_filmmaker_lname']?></strong> 
										 <br>
										 <?=$filmmaker['mx_filmmakers_role']?>
									</h4>
									<?=$filmmaker['ch_filmmaker_bio']?>
								</div>
								
							</li>
							<?php } ?>
						</ul>
						<?php
						if(trim($project['film_additional_credits'])!=''){
							echo '<h3>Additional Credits</h3>';
							echo str_replace("\n", '<br />', $project['film_additional_credits']);
						}
						?>
					</section>
				</article>
			</li>
			<?php } ?>
		</ul>
		<section class="jury" id="">
			<h2>Meet The Jury</h2>
			<ul class="jury-members clearfix">
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
			</ul>
		</section>
	</section>
<?php include_once 'inc/sharenav.inc' ?>
</section>

<!-- End Project Page -->
    
<?php include_once 'inc/footer.inc' ?>

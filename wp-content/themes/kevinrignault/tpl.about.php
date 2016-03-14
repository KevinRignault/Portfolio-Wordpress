<?php

/**
 * The about template file
 * Template Name: À Propos
 *
 */ 
 
 	//-- GET DATAS
 	
 	//-- Presentation
 	$presentation = CFS()->get("about_presentation");
 	$contact_email = CFS()->get("about_email");
 	
 	//-- Services
 	$services = CFS()->get('about_services');
 	
 	//-- Skills
 	$skills = CFS()->get('about_skills');
 		
?>

<!DOCTYPE html> 
<html> 
	<head>
		<?php include WP_TPL_PATH.'/modules/global/metas.php'; ?>
		<?php include WP_TPL_PATH.'/modules/global/css.php'; ?>
	</head>
	<body id="page-<?php the_ID(); ?>">

		<?php get_header(); ?>
		<?php include WP_TPL_PATH.'/modules/blocs/page.header.php'; ?>
		
		<section class="content about">
			<div class="container">
				<h2><span><?php the_title(); ?></span></h2>
				
				<div class="about-me">
					<div class="row">
						<div class="col-md-12">
							<p><?php echo $presentation; ?></p>
							<a href="mailto:<?php echo $contact_email; ?>" class="button" title="Kévin Rignault - Me contacter">Me contacter</a>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		
		<section class="about-domain">
			<div class="col-md-6 illustration no-padding">
				<img src="/portfolio-wordpress/wp-content/medias/kevin-rignault_illustration-about.jpg" alt="" />
		  	</div>
			<div class="col-md-6 all_domain">
				<h3><span>Services</span></h3>
		
				<?php foreach($services as $service) : ?>
							
					<div class="col-md-6 domain">
						<div class="content">
							<span class="icon <?php echo $service['picto_classe']; ?>"></span>
							<p class="title"><?php echo $service['service']; ?><p>
							<p><?php echo $service['description']; ?></p>
						</div>
					</div>
					
				<?php endforeach; ?>
		
		  	</div>
		</section>
		
		<section class="about-skills">
			<div class="container">
				<h3><span>Compétences</span></h3>
		
				<div class="row">
				
					<?php $i=0; ?>
					
					<?php foreach($skills as $skill) : ?>
					
					<?php if($i==0) : ?>
						<div class="col-md-4 skills-bloc">
					<?php endif; ?>
					
							<div class="skillbar clearfix" data-percent="<?php echo $skill['percent']; ?>">
								<div class="skillbar-title"><span><?php echo $skill['skill']; ?></span></div>
			  					<div class="skillbar-bar"></div>
								<div class="skillbar-percent"><?php echo $skill['percent']; ?>%</div>
							</div>
					
					<?php $i++; if($i==3) : $i=0; ?>
						</div>
					<?php endif; ?>
					
					<?php endforeach; ?>
									
				</div>
			</div>
		</section>
		
		<?php include WP_TPL_PATH.'/modules/blocs/resume.download.php'; ?>
		<?php include WP_TPL_PATH.'/modules/blocs/prefooter.php'; ?>
		
		<?php get_footer(); ?>
		
		<?php include WP_TPL_PATH.'/modules/global/js.php'; ?>
	</body>
</html>
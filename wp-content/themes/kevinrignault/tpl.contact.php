<?php

/**
 * The about template file
 *
 * Template Name: Contact
 *
 * @package KevinRignault
 * @subpackage Kevin_Rignault
 * @since Kevin Rignault 1.0
 */
 
 	//-- GET DATAS
 	
 	//-- Contact map
 	$latitude = CFS()->get("map_latitude");
 	$longitude = CFS()->get("map_longitude");
 	
 	//-- Contact infos
 	$illustration = CFS()->get('contact_illustration');
 	$prenom_nom = CFS()->get("contact_prenom_nom");
 	$cp_ville = CFS()->get("contact_cp_ville");
 	$email = CFS()->get("contact_email");
 	$skype = CFS()->get("contact_skype");
 
?>

<!DOCTYPE html> 
<html> 
	<head>
		<?php include WP_TPL_PATH.'/modules/global/metas.php'; ?>
		<?php include WP_TPL_PATH.'/modules/global/css.php'; ?> 
	</head>
	<body id="page-<?php the_ID(); ?>">

		<?php get_header(); ?>
		<div class="contact-map" data-latitude="<?php echo $latitude; ?>" data-longitude="<?php echo $longitude; ?>"></div>
		
		<section class="content contact">
			<div class="container">
				<h2><span><?php the_title(); ?></span></h2>
			
				<div class="row">
					<div class="col-md-6 contact-form">
						<div class="message return"><p></p><span>X</span></div>
						<form id="contact-form" method="post">
							<fieldset>
								<input type="text" id="contact-name" name="contact-name" placeholder="Nom" value="" class="required"/>
								<input type="email" id="contact-email" name="contact-email" placeholder="Email" value="" class="required"/>
								<textarea id="contact-message" name="contact-message" placeholder="Message" class="required"></textarea>
								<button type="submit" id="contact-send">Envoyer</button>
							</fieldset>
						</form>
					</div>
				
					<div class="col-md-6 contact-infos">
						<img src="<?php echo $illustration; ?>" alt="Kévin Rignault - Troyes">
						<p class="name"><?php echo $prenom_nom; ?></p>
						<p class="address"><?php echo $cp_ville; ?></p>
						<p class="email">Email : 
							<a href="mailto:<?php echo $email; ?>" title="<?php $email; ?>"><?php echo $email; ?></a>
						</p>
						<p class="skype">Skype : <?php echo $skype; ?></p>
					</div>
				</div>
			</div>
		</section>
		
		<?php include WP_TPL_PATH.'/modules/blocs/resume.download.php'; ?>
		<?php include WP_TPL_PATH.'/modules/blocs/prefooter.php'; ?>
		
		<?php get_footer(); ?>
		
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 
		<?php include WP_TPL_PATH.'/modules/global/js.php'; ?>
	</body>
</html>
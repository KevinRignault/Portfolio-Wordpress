<?php

/**
 * The resources template file
 * Template Name: Ressources
 *
 */ 
 
 	//-- GLOBAL VAR
 	$project_limit = 4;
 
?>

<!DOCTYPE html> 
<html> 
	<head>
		<?php include 'modules/global/metas.php'; ?>
		<?php include 'modules/global/css.php'; ?> 
	</head>
	<body id="page-<?php the_ID(); ?>" class="resources">

		<?php get_header(); ?>
		<?php include 'modules/blocs/page.header.php'; ?>
		
		<section class="content resources">
			<div class="container">
				<h2><span><?php the_title(); ?></span></h2>
				
			</div>
		</section>
		
		<?php include 'modules/blocs/projects.recents.php'; ?>
		<?php include 'modules/blocs/prefooter.php'; ?>
		
		<?php get_footer(); ?>
		
		<?php include 'modules/global/js.php'; ?>
	</body>
</html>
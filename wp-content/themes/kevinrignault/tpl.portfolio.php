<?php

/**
 * The portfolio template file
 * Template Name: Portfolio
 *
 */ 
 
 	//-- GLOBAL VAR
 	$is_portfolio = true;
 
 	//-- POSTS QUERY
	query_posts(array(
	  'post_type' => 'portfolio',
	  'posts_per_page' => '-1',
	  'order' => 'DESC',
	  'orderby' => 'meta_value',
	  'meta_key' => 'project_date'
	)); 
 
?>

<!DOCTYPE html> 
<html> 
	<head>
		<?php include WP_TPL_PATH.'/modules/global/metas.php'; ?>
		<?php include WP_TPL_PATH.'/modules/global/css.php'; ?> 
	</head>
	<body id="page-<?php the_ID(); ?>" class="portfolio">

		<?php get_header(); ?>
		<?php include WP_TPL_PATH.'/modules/blocs/page.header.php'; ?>
		
		<section class="content portfolio">
			<div class="container">
				<h2><span><?php the_title(); ?></span></h2>
			
				<?php if(have_posts()) : ?>
					
					<?php $i=0; ?>
					<?php while(have_posts()) : the_post(); ?>
						
						<?php include WP_TPL_PATH.'/modules/projets/projects.liste.php'; ?>
						<?php $i++; ?>
						
					<?php endwhile; ?>
					
				<?php endif; ?>
				
			</div>
		</section>
		
		<?php include WP_TPL_PATH.'/modules/blocs/articles.recents.php'; ?>
		<?php include WP_TPL_PATH.'/modules/blocs/prefooter.php'; ?>
		
		<?php get_footer(); ?>
		
		<?php include WP_TPL_PATH.'/modules/global/js.php'; ?>
	</body>
</html>
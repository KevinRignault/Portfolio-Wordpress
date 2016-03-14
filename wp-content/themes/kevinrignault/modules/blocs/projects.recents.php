<?php

/*
 * The recents projects bloc file
 *
 */
 
	//-- POSTS QUERY
	query_posts(array(
	  'post_type' => 'portfolio',
	  'posts_per_page' => $project_limit,
	  'order' => 'DESC',
	  'orderby' => 'meta_value',
	  'meta_key' => 'project_date'
	));

?>


<section class="recent-work">
	<div class="container">
		<h2>Projets récents</h2>

		<?php if(have_posts()) : ?>
					
			<?php $i=0; ?>
			<?php while(have_posts()) : the_post(); ?>
				
				<?php include WP_TPL_PATH.'/modules/projets/projects.liste.php'; ?>
				<?php $i++; ?>
				
			<?php endwhile; ?>
			
		<?php endif; ?>
		
	</div>

	<div class="more more-projects">
		<div class="container">
			<a href="<?php the_permalink(11); ?>" title="Kévin Rignault - Tous les projets" class="button">Tous les projets</a>
		</div>
	</div>
</section>
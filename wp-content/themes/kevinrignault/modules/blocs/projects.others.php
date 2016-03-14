<?php

/*
 * The others projects bloc file
 *
 */

	//-- POSTS QUERY
	query_posts(array(
	  'post_type' => 'portfolio',
	  'posts_per_page' => 4,
	  'order' => 'RAND',
	  'post__not_in' => array(get_the_ID())
	));

?>

<section class="project-others">
	<div class="container">
		<h2><span>Autres projets</span></h2>
		
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
			<a href="<?php the_permalink(11); ?>" title="" class="button">Tous les projets</a>
		</div>
	</div>
</section>
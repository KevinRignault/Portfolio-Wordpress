<?php

/*
 * The recent articles bloc file
 *
 */

 	//-- Get resources pages
 	$resources_page =  get_page_by_title('Ressources');

 	//-- Get children pages
 	$resources_children = get_posts( array(
    	'post_type' => 'page',
		'post_parent' => $resources_page->ID,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	));

?>


<section class="last-resources">
	<div class="container">
		<h2><span>Ressources</span></h2>
			
		<?php $i=0; ?>
		<?php foreach($resources_children as $child) : ?>
			
			<?php include WP_TPL_PATH.'/modules/articles/category.liste.php'; ?>
			<?php $i++; ?>
			
		<?php endforeach; ?>
			
	</div>

	<div class="more more-resources">
		<div class="container">
			<a href="<?php the_permalink(13); ?>" title="Kévin Rignault - Toutes les ressources" class="button">Toutes les ressources</a>
		</div>
	</div>
</section>
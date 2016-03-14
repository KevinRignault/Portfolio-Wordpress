<?php

/*
 * The projects liste bloc file
 *
 */
 
 	//-- GET DATAS
 	$project_image = CFS()->get("page_header");
 	$project_classe = ($is_home || $is_portfolio) ? "small-padding" : "no-padding";

?>

<article class="col-md-3 col-sm-4 <?php echo $project_classe; ?>">
	<div class="item-work">
		<img src="<?php echo $project_image; ?>" alt="<?php the_title(); ?> - Kévin Rignault" width="281" height="230"/>
		<a href="<?php the_permalink(); ?>" class="item-hover">
	  		<h3 class="item-hover-content"><?php the_title(); ?></h3>
		</a>
  	</div>
</article>
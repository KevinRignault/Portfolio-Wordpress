<?php

/*
 * The category liste bloc file
 *
 */

 	//-- GET DATAS
 	$category_title = $child->post_title;
 	$category_image = CFS()->get("page_header", $child->ID);
 	$category_classe = $i==4 ? "hidden-sm" : "";
 	
?>

<article class="col-md-3 col-sm-4 no-padding <?php echo $category_classe; ?>">
	<div class="item-resource-category">
		<img src="<?php echo $category_image; ?>" alt="<?php echo $category_title ?> - Kévin Rignault" width="285" height="230"/>
		<a href="<?php the_permalink($child->ID); ?>" class="item-hover">
	  		<h3 class="item-hover-content"><?php echo $category_title ?></h3>
		</a>
  	</div>
</article>
<?php

/**
 * The single page template file
 *
 */ 
 
 	//-- REDIRECT TO SINGLE
 	$post_type = get_post_type ();
	if ($post_type == "post") include WP_TPL_PATH.'/single-resource.php';
	else if($post_type == "portfolio") include WP_TPL_PATH.'/single-project.php';
 
?>
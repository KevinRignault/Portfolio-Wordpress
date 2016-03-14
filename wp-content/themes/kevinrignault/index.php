<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

 	//-- GLOBAL VAR
 	$is_home = true;
 	$project_limit = 8;
 
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
		
		<?php include WP_TPL_PATH.'/modules/blocs/projects.recents.php'; ?>
		<?php include WP_TPL_PATH.'/modules/blocs/articles.recents.php'; ?>
		
		<?php include WP_TPL_PATH.'/modules/blocs/prefooter.php'; ?>
		<?php get_footer(); ?>
		
		<?php include WP_TPL_PATH.'/modules/global/js.php'; ?>
	</body>
</html>
<?php

/**
 * The single resource template file
 *
 */
 
?>

<!DOCTYPE html> 
<html> 
	<head>
		<?php include WP_TPL_PATH.'/modules/global/metas.php'; ?>
		<?php include WP_TPL_PATH.'/modules/global/css.php'; ?>
	</head>
	<body id="page-<?php the_ID(); ?>">
	
		<?php get_header(); ?>
		
		<section class="content resource">
			<div class="container">
				<h2><span></span></h2>
			</div>
		</section>
				
		<?php get_footer(); ?>
		
		<?php include WP_TPL_PATH.'/modules/global/js.php'; ?>
	</body>
</html>
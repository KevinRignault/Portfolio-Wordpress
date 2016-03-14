<?php

/**
 * The 404 template file
 *
 */ 
 
?>

<!DOCTYPE html> 
<html> 
	<head>
		<?php include WP_TPL_PATH.'/modules/global/metas.php'; ?>
		<?php include WP_TPL_PATH.'/modules/global/css.php'; ?> 
	</head>
	<body>

		<?php get_header(); ?>
		
		<section class="content 404">
			<div class="container">
				<h2><span> 4o4 </span></h2>
			</div>
		</section>
		
		<?php get_footer(); ?>
		
		<?php include WP_TPL_PATH.'/modules/global/js.php'; ?>
	</body>
</html>
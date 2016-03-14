<?php

/**
 * The search template file
 *
 */ 
 
 	//-- SEARCH
	global $query_string;
	global $wp_query;
	
	//-- Get search params
	$query_args = explode("&", $query_string);
	$search_query = array();
	
	//-- Make search query
	if(strlen($query_string) > 0) {
		foreach($query_args as $key => $string) {
			$query_split = explode("=", $string);
			$search_query[$query_split[0]] = urldecode($query_split[1]);
		}
	}
	
	//-- Execute search query
	$search = new WP_Query($search_query);
	
	//-- Get search results
	$search_term = $_GET['s'];
	$search_results_nb = $wp_query->found_posts;
	$search_results_label = $search_results_nb > 1 ? $search_results_nb." résultats trouvés" : $search_results_nb." résultat trouvé";
 
?>

<!DOCTYPE html> 
<html> 
	<head>
		<?php include WP_TPL_PATH.'/modules/global/metas.php'; ?>
		<?php include WP_TPL_PATH.'/modules/global/css.php'; ?> 
	</head>
	<body class="search">

		<?php get_header(); ?>
		
		<section class="content search">
			<div class="container">
				<h2><span>Résultats de recherche</span></h2>
				<p class="search-results-infos"><?php echo $search_results_label; ?> pour « <?php echo $search_term; ?> »</p>
			
				<?php if ($wp_query->have_posts()) : ?>
				
					<div class="search-results-list">
				
					<?php while ($wp_query->have_posts()) : the_post(); ?>
						
					    <div class="col-sm-4 search-result-item">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<img src="<?php echo CFS()->get("page_header"); ?>" alt="<?php the_title(); ?>">
							</a>
							<h3 class="title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h3>
							<div class="extract"><?php the_content(); ?></div>
						</div>
						
					<?php endwhile; ?>
					
					</div>
					
				<?php endif; ?>

				<div class="row">
				</div>
	
			</div>
		</section>
		
		<?php include WP_TPL_PATH.'/modules/blocs/projects.recents.php'; ?>
		<?php include WP_TPL_PATH.'/modules/blocs/prefooter.php'; ?>
		<?php get_footer(); ?>
		
		<?php include WP_TPL_PATH.'/modules/global/js.php'; ?>
	</body>
</html>
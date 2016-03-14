<?php

//-- GLOBAL VAR
define("WP_SITE_URL", site_url());
define("WP_BASE_PATH", ABSPATH);
define("WP_TPL_URL", get_template_directory_uri());
define("WP_TPL_PATH", get_template_directory());


//-- GET CURRENT URL
function current_url() {
  //-- Protocol
  $url = ( 'on' == $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
  $url .= $_SERVER['SERVER_NAME'];

  //-- Port
  $url .= ( '80' == $_SERVER['SERVER_PORT'] ) ? '' : ':' . $_SERVER['SERVER_PORT'];
  $url .= $_SERVER['REQUEST_URI'];

  return trailingslashit($url);
}

//-- REMOVE ALL CLASS
function nav_class_all_items($var){
	return is_array($var) ? array_intersect($var, array('current_page_item')) : '';
}
add_filter('nav_menu_css_class', 'nav_class_all_items');
add_filter('nav_menu_item_id', 'nav_class_all_items');


//-- INIT PORTFOLIO MENU
function init_portfolio() {
	register_post_type('portfolio', array(
		'label' => __('Portfolio'),
		'singular_label' => __('Projet'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title', 'editor'),
		'rewrite' => true,
		'rewrite' => array('slug'=>'portfolio', 'with_front'=>false),
	));

	register_taxonomy('domaine', 'portfolio', array('hierarchical'=>true, 'label'=>'Domaine', 'query_var'=>true, 'rewrite'=> true));  
	register_taxonomy('type', 'portfolio', array('hierarchical'=>false, 'label'=>'Type', 'query_var'=>true, 'rewrite'=>true));
}
add_action('init', 'init_portfolio');


//-- CUSTOM MENU ACTIVE
function add_parent_url_menu_class($classes = array(), $item=false){
	//-- Get current URL
	$current_url = current_url();

	//-- Get homepage URL
	$homepage_url = get_bloginfo('url');

	//-- Exclude 404 and homepage
	if( is_404() or $item->url == $homepage_url){
    	return $classes;
    }	

	//-- Set menu active
	$to_active = array("page","portfolio");
	if( in_array(get_post_type(), $to_active) ){
    	unset($classes[array_search('current_page_parent',$classes)]);
		if( isset($item->url) ){
			if( strstr( $current_url, $item->url) ){
				$classes[] = 'current_page_item';
			}
		}
	}

	return $classes;
}
add_filter('nav_menu_css_class', 'add_parent_url_menu_class', 10, 3);

?>
<?php

/*
 * The header bloc file
 *
 */

 	//-- GET DATAS
 	$logo = WP_TPL_URL.'/assets/images/kevin-rignault_logo-light2x.png';
 	
?>

<header>

	<div id="search-bar">
		<div class="container">
			<?php get_search_form(); ?>
			<span class="picto cancel flaticon-cross37"></span>
		</div>
	</div>

	<div id="navigation-bar">
		<div class="container">
			<div class="row">
				<h1 class="col-sm-3 logo">
					<a href="<?php echo WP_SITE_URL; ?>" title="Portfolio de Kévin Rignault - Développeur Web et Mobile"><img src="<?php echo $logo; ?>" alt="Portfolio de Kévin Rignault, ancien étudiant SRC de l'IUT de Troyes, diplômé d'un Master Produits et Services Multimédia - Communication Digitale, Développement Web et Mobile." class="logo" width="112" height="65"/></a>
				</h1>
				<div class="menu-icon">
					<span class="flaticon-menu53"></span>
				</div>
				<div class="col-md-9 menu">
					<div id="navigation">
						<?php wp_nav_menu(array('container'=>false)); ?>
						<span class="picto search-icon flaticon-magnifyingglass13"></span>
					</div>
				</div>
			</div>
		</div>
	</div>

</header>
<?php

/*
 * The metas bloc file
 *
 */

?>

<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Kévin Rignault">
<meta name="geo.placename" content="Troyes, Champagne-Ardenne">
<meta name="geo.region" content="FR-10">
<title>
	<?php bloginfo('name') ?>
	<?php if(is_404()) : ?> - <?php _e('Not Found') ?>
	<?php elseif(is_home()) : ?> - <?php bloginfo('description') ?>
	<?php else : ?><?php wp_title("-") ?>
	<?php endif ?>
</title>
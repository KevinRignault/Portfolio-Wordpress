<?php 

/*
 * The page header bloc file
 *
 */

	if($is_home){
		$page_header = CFS()->get('page_header', 2);
		$page_header_top = "center";
	}
	else {
		$page_header = CFS()->get('page_header');
		$page_header_top = CFS()->get('page_header_top');
	}
?>

<div class="page-header" style="background:url(<?php echo $page_header; ?>) center <?php echo $page_header_top; ?>;background-size:cover;background-attachment:fixed;">
	<?php if($is_home) : ?>
		<div class="presentation">
			<p class="author">KEVIN RIGNAULT</p>
			<p class="domain">Conception multimédia . Développement Web et Mobile</p>
		</div>
	<?php endif; ?>
</div>
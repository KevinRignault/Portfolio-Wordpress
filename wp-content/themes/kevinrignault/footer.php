<?php

/*
 * The footer bloc file
 *
 */

 	//-- GET DATAS
 	$facebook_url = "https://www.facebook.com/kevins.rignault";
 	$twitter_url = "https://twitter.com/kevinrignault/";
 	$linkedin_url = "https://fr.linkedin.com/in/kevinrignault/";
 	$slideshare_url = "http://fr.slideshare.net/kevinrignault/";
 	$github_url = "https://github.com/kevinrignault/";
 	$jsfiddle_url = "http://jsfiddle.net/user/kevinrignault/";
 	
 	$copyright = "© Kévin Rignault 2015";

?>

<footer>
	<div class="container">
		<div id="social-network">
			<a href="<?php echo $facebook_url; ?>" title="Kévin Rignault - Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="<?php echo $twitter_url; ?>" title="Kévin Rignault - Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="<?php echo $linkedin_url; ?>" title="Kévin Rignault - LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="<?php echo $slideshare_url; ?>" title="Kévin Rignault - Slideshare" target="_blank"><i class="fa fa-slideshare"></i></a>
			<a href="<?php echo $github_url; ?>" title="Kévin Rignault - GitHub" target="_blank"><i class="fa fa-github"></i></a>
			<a href="<?php echo $jsfiddle_url; ?>" title="Kévin Rignault - JSFiddle" target="_blank"><i class="fa fa-jsfiddle"></i></a>
		</div>
		<div id="copyright">
			<?php echo $copyright; ?>
		</div>
	</div>
</footer>
<div id="to-top"><span class="flaticon-arrow395"></span></div>
<?php

/**
 * The single project template file
 *
 */
 
 	//-- GET DATAS
 	
 	//-- Post
 	the_post();
 	
 	//-- Project references - Photos / Videos
 	$references = CFS()->get('project_references');
 	
 	//-- Project infos
 	$date = date("m/Y", strtotime(CFS()->get("project_date")));
 	$poste = CFS()->get("project_poste");
 	$type = array_values(CFS()->get("project_type"))[0];
 	$school_company = CFS()->get("project_school_company");
 	$school_company_link = CFS()->get("project_link_school_company");
 	
 	//-- Project collaborators
 	$collaborators = CFS()->get('project_collaborators');
 	
 	//-- Project langages / tools
 	$tools = CFS()->get('project_languages_tools');
 
 	//-- Project link
 	$link = CFS()->get('project_link');
 
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
		
		<section class="content project">
			<div class="container">
				<div class="row">
					<div class="col-md-9 project-sources">
						<h2><span><?php the_title(); ?></span></h2>
						
						<?php foreach($references as $ref) : ?>
							
							<div class="item-reference">
								<?php if($ref['project_video']) : ?>
									<div class="videoWrapper">
										<iframe src="http://www.youtube.com/embed/<?php echo $ref['project_video']; ?>" allowfullscreen></iframe>
									</div>
								<?php else : ?>
									<img src="<?php echo $ref['project_image']; ?>" alt="Kévin Rignault - <?php the_title(); ?>" width="930" height="523">
								<?php endif; ?>
							</div>
							
						<?php endforeach; ?>
		
					</div>
					
					<div class="col-md-3 project-description">
						<p class="title main"><span>PROJET</span></p>
						<p class="content description"><?php the_content(); ?></p>
		
						<p class="title infos"><span>INFOS</span></p>
						<p class="date"><?php echo $date; ?></p>
						<p class="job"><?php echo $poste; ?></p>
						<p class="type"><?php echo $type; ?></p>
						<p class="school_company">
							<?php if($school_company_link) : ?>
								<a href="<?php echo $school_company_link; ?>" title="<?php the_title(); ?>" target="_blank"><?php echo $school_company; ?></a>
							<?php else : ?>
								<?php echo $school_company; ?>
							<?php endif; ?>
						</p>
		
						<?php if(count($collaborators)>0) : ?>
							
							<p class="title collaborators"><span>COLLABORATEURS</span></p>
							<div class="content collaborators">
							
							<?php foreach($collaborators as $collab) : ?>
								<?php if($collab['collaborator_link']) : ?>
									<p><a href="<?php echo $collab['collaborator_link']; ?>" title="<?php echo $collab['collaborator']; ?>"><?php echo $collab['collaborator'] ?></a></p>
								<?php else : ?>
									<p><?php echo $collab['collaborator']; ?></p>
								<?php endif; ?>
							<?php endforeach; ?>
							
							</div>
							
						<?php endif;?>
		
						<p class="title tools"><span>LANGAGES ET OUTILS</span></p>
						<div class="content tools">
							<?php foreach($tools as $tool) : ?>
								<p><?php echo $tool['language_tool']; ?></p>
							<?php endforeach; ?>
						</div>
						
						<?php if($link) : ?>
							<a href="<?php echo $link; ?>" class="button more" title="<?php the_title(); ?> - Voir le projet" target="_blank">Voir le projet</a>
						<?php endif; ?>
							
					</div>
				</div>
			</div>
		</section>
				
		<?php include WP_TPL_PATH.'/modules/blocs/projects.others.php'; ?>
		<?php include WP_TPL_PATH.'/modules/blocs/prefooter.php'; ?>		
		<?php get_footer(); ?>
		
		<?php include WP_TPL_PATH.'/modules/global/js.php'; ?>
	</body>
</html>
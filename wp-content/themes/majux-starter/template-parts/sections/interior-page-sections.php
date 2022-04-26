	<?php /* Section Wrapper Start */ ?>
	<?php $sidebar = false; ?>
	<?php get_template_part('template-parts/content/page-content', 'start', $sidebar); ?>

	<?php 	
	$sections = get_field('sections', 'option'); 
	foreach($sections as $args) : 

		$layout = $args['acf_fc_layout'];
		$format = array_key_exists('layout', $args) ? $args['layout'] : NULL;

		get_template_part('template-parts/sections/' . $layout, $format, $args); 

	endforeach; ?>

	<?php /* Section Wrapper End */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>
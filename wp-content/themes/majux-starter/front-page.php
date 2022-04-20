<?php get_header(); ?>


	<?php /* Masthead */ ?>
	<?php get_template_part('template-parts/masthead/masthead-home'); ?>


	<?php /* Content Wrapper Start */ ?>
	<?php $sidebar = (class_exists('ACF')) ? get_field('enable_sidebar') : true; ?>
	<?php get_template_part('template-parts/content/page-content', 'start', $sidebar); ?>


		<?php /* Main Content */ ?>
		<?php 	
		$sections = get_field('sections'); 
		foreach($sections as $args) : 

			$layout = $args['acf_fc_layout'];
			$format = array_key_exists('layout', $args) ? $args['layout'] : NULL;

			get_template_part('template-parts/sections/front-page/' . $layout, $format, $args); 

		endforeach; ?>


	<?php /* Content Wrapper End / Sidebar */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>


<?php get_footer(); ?>
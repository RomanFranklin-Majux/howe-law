<?php get_header(); ?>


	<?php /* Content Wrapper Start */ ?>
	<?php $sidebar = (class_exists('ACF')) ? get_field('enable_sidebar') : true; ?>
	<?php get_template_part('template-parts/content/page-content', 'start', $sidebar); ?>


		<?php /* Main Content */ ?>
		<div class="d-flex align-items-center justify-content-center full-height">
			<h1>Page Cannot Be Found</h1>
		</div>
		

	<?php /* Content Wrapper End / Sidebar */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>


<?php get_footer(); ?>
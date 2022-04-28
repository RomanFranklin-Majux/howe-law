<?php get_header(); ?>


	<?php /* Masthead */ ?>
	<?php get_template_part('template-parts/masthead/masthead'); ?>


	<?php /* Content Wrapper Start */ ?>
	<?php $sidebar = true; ?>
	<?php get_template_part('template-parts/content/page-content', 'start', $sidebar); ?>


		<?php /* Main Content */ ?>
		<?php get_template_part('template-parts/content/loop', 'blog') ?>

		<?php /* Pagination */ ?>
		<?php get_template_part('template-parts/modules/pagination') ?>

	<?php /* Content Wrapper End / Sidebar */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>


<?php get_footer(); ?>
<?php /* Template Name: Attorneys Page */ ?>

<?php get_header(); ?>


	<?php /* Masthead */ ?>
	<?php get_template_part('template-parts/masthead/masthead'); ?>


	<?php /* Content Wrapper Start */ ?>
	<?php $sidebar = true; ?>
	<?php get_template_part('template-parts/content/page-content', 'start', $sidebar); ?>


		<?php /* Main Content */ ?>
		<?php get_template_part('template-parts/content/loop'); ?>

		<?php /* Attorneys */ ?>

		<div class="row">

		<?php 		
		$args = array(
			'post_type' 		=> 'attorney',
			'posts_per_page' 	=> -1,
			'post_status'		=> 'publish',
			'order'				=> 'ASC',
			'orderby'			=> 'menu_order'
		);

		$query = new WP_Query( $args ); 

		if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			
			<div class="col-md-4">
				<?php echo get_the_title(); ?>
			</div>

			<?php endwhile; ?>
		<?php endif; ?>

		</div>


	<?php /* Content Wrapper End / Sidebar */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>


	<?php /* Sections */ ?>
	<?php get_template_part('template-parts/sections/interior-page-sections'); ?>


<?php get_footer(); ?>
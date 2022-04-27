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

		<div class="row gx-5">

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
			
			<div class="col-md-4 pb-5 attorney item">
				<a href="<?php echo get_the_permalink(); ?>">
					<div class="item-image">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					</div>
					<div class="details">
						<span class="name"><?php echo get_the_title(); ?></span>
						<br />
						<?php $title = get_field('title'); ?>
						<?php $title = (!empty($title)) ? $title : 'Attorney'; ?>
						<span class="title"><?php echo $title; ?></span>
					</div>
					<div class="text-center my-4">
						<div class="btn btn-primary">Read Profile</div>
					</div>
				</a>
			</div>

			<?php endwhile; ?>
		<?php endif; ?>

		</div>


	<?php /* Content Wrapper End / Sidebar */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>


	<?php /* Sections */ ?>
	<?php get_template_part('template-parts/sections/interior-page-sections'); ?>


<?php get_footer(); ?>
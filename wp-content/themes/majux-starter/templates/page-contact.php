<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>


	<?php /* Masthead */ ?>
	<?php get_template_part('template-parts/masthead/masthead'); ?>


	<?php /* Content Wrapper Start */ ?>
	<?php $sidebar = (class_exists('ACF')) ? get_field('enable_sidebar') : true; ?>
	<?php get_template_part('template-parts/content/page-content', 'start', $sidebar); ?>


		<?php /* Main Content */ ?>
		<div class="container">
			<div class="contact-callout">
				<h2>Call Us For a Free Case Evalution</h2>
				<span class="number"><?php echo phoneNumber(); ?></span>
			</div>

			<div class="contact-form">
				<?php $shortcode = get_field('shortcode'); ?>
				<?php echo do_shortcode($shortcode); ?>
			</div>			
		</div>

		<div class="locations">
			<h2>Locations</h2>
			<?php $states = get_field('states'); ?>

			<div class="row">
				<?php foreach($states as $state) : ?>

					<div class="col">
						<h3><?php echo $state['state']; ?></h3>
						<?php foreach($state['locations'] as $location) : ?>
							<div class="address">
								<h4><?php echo $location['city']; ?></h4>
								<span><?php echo $location['street_address']; ?><br />
									<?php echo $location['city_state_zip']; ?><br />
									<?php echo $location['phone_number']; ?>
								</span>							
							</div>
						<?php endforeach; ?>
					</div>

				<?php endforeach; ?>	
			</div>

		</div>


	<?php /* Content Wrapper End / Sidebar */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>


<?php get_footer(); ?>
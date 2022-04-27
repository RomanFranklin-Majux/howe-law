<?php /* Template Name: Testimonials */ ?>


<?php get_header(); ?>


	<?php /* Masthead */ ?>
	<?php get_template_part('template-parts/masthead/masthead'); ?>


	<?php /* Content Wrapper Start */ ?>
	<?php $sidebar = true; ?>
	<?php get_template_part('template-parts/content/page-content', 'start', $sidebar); ?>


		<?php /* Main Content */ ?>
		<?php $testimonials = get_field('testimonials', 'option'); ?>

		<div class="row testimonials row-cols-md-2 g-4">
			<?php foreach($testimonials as $testimonial) : ?>
				<div class="col">
					<div class="testimonial d-flex flex-column">
						<div class="rating">
							<?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
								<span class="star"></span>
							<?php endfor; ?>
						</div>
						<div class="quote">
							<p class="highlight">&ldquo;<?php echo $testimonial['highlight']; ?>&rdquo;</p>
							<p class="full-quote"><?php echo $testimonial['full_quote']; ?></p>							
						</div>
						<div class="details">
							<span class="name"><?php echo $testimonial['client_name']; ?></span><br />
							<span class="source"><?php echo $testimonial['source']; ?>&nbsp;<?php echo $testimonial['date']; ?></span>							
						</div>
					</div>
				</div>
			<?php endforeach; ?>			
		</div>




	<?php /* Content Wrapper End / Sidebar */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>


	<?php /* Sections */ ?>
	<?php get_template_part('template-parts/sections/interior-page-sections'); ?>



<?php get_footer(); ?>
<?php /* Template Name: Results */ ?>

<?php get_header(); ?>


	<?php /* Masthead */ ?>
	<?php get_template_part('template-parts/masthead/masthead'); ?>


	<?php /* Content Wrapper Start */ ?>
	<?php $sidebar = true; ?>
	<?php get_template_part('template-parts/content/page-content', 'start', $sidebar); ?>


		<?php /* Main Content */ ?>
		<div class="cards-wrapper container position-relative">
			<div class="row row-cols-md-2 g-4">

				<?php 
				$cards 	= get_field('cards', 'option'); 
				?>
				<?php 
				if ( $cards ): 
					foreach($cards as $card) : ?>
						<div class="col-md">
							<?php get_template_part('template-parts/modules/result-card', null, $card); ?>	
						</div>		
						<?php	
					endforeach; 
				endif; ?>

			</div>
		</div>


	<?php /* Content Wrapper End / Sidebar */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>

	<?php /* Sections */ ?>
	<?php get_template_part('template-parts/sections/interior-page-sections'); ?>


<?php get_footer(); ?>
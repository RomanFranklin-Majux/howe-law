<section class="results-cards">
	<?php get_template_part('template-parts/modules/section-heading', null, $args['heading']); ?>

	<div class="cards-wrapper container position-relative mb-5">
		<div class="row row-cols-4 g-4">

			<?php 
			$cards 	= get_field('cards', 'option'); 
			$i 		= 0;
			$max 	= 4;
			?>
			<?php 
			if ( $cards ): 
				foreach($cards as $card) : ?>
					<div class="col-md">
						<?php get_template_part('template-parts/modules/result-card', null, $card); ?>	
					</div>		
					<?php
					$i++; 
					if ($i >= $max) : break; endif; 	
				endforeach; 
			endif; ?>

		</div>
	</div>

	<?php get_template_part('template-parts/modules/button', null, $args['button']); ?>
</section>
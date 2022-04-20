<section class="featured-in force-full-width">
	<?php get_template_part('template-parts/modules/section-heading', null, $args['heading']); ?>

	<div class="position-relative">
		<div class="swiper-featured-in mx-5 mx-lg-0">
		  <!-- Additional required wrapper -->
		  <div class="swiper-wrapper">
		    <!-- Slides -->
		    <?php $logos = $args['logos']; ?>
		    <?php if (!empty($logos)) : ?>
		    	<?php foreach($logos as $logo) : ?>

			    <div class="swiper-slide">
			    	<img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>">
			    </div>

				<?php endforeach; ?>
			<?php endif; ?>
		  </div>

		  <!-- If we need navigation buttons -->
		  <div class="swiper-awards-prev d-lg-none"><i class="fas fa-chevron-left"></i></div>
		  <div class="swiper-awards-next d-lg-none"><i class="fas fa-chevron-right"></i></div>
		</div>	
	</div>	
</section>
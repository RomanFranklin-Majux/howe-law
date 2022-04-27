<section class="testimonial-slider">
	<?php $testimonials = get_field('testimonials', 'option'); ?>
	<div class="position-relative">
		<div class="swiper-testimonials mx-5 mx-lg-0">
		  <div class="swiper-wrapper">
			<?php foreach($testimonials as $testimonial) : ?>
				<div class="swiper-slide">
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

		  <!-- If we need navigation buttons -->
		  <div class="swiper-awards-prev d-lg-none"><i class="fas fa-chevron-left"></i></div>
		  <div class="swiper-awards-next d-lg-none"><i class="fas fa-chevron-right"></i></div>
		</div>	
	</div>		
</section>
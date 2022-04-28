<div class="masthead masthead-home header-fix">
	<div class="attorney-image">
		<img src="<?php echo get_field('masthead_image'); ?>" alt="">
	</div>

	<div class="masthead-content-wrapper d-none d-lg-flex">
		<div class="masthead-content">
			<div class="text-banner"><?php echo get_field('headline'); ?></div>
			<div class="cases" style="font-style:italic">
				<?php echo get_field('case_details'); ?>
			</div>
			<div class="text-center">
				<?php $button = get_field('button'); ?>
				<a href="<?php echo $button['url']; ?>" class="btn btn-primary"><?php echo $button['title']; ?></a>
			</div>
			
		</div>
		<div class="masthead-contact-form d-none d-lg-block">
			<p class="text-center font-size-xl" style="font-weight:600">Get a Free Case Review</p>
			<?php echo do_shortcode(get_field('cf_shortcode')); ?>
		</div>		
	</div>

	<div class="tagline">
		<?php echo get_field('tagline'); ?>
	</div>
</div>
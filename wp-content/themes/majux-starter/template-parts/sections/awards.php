<section class="awards force-full-width">
	<?php get_template_part('template-parts/modules/section-heading', null, $args['heading']); ?>

		<div class="container d-flex justify-content-center flex-wrap">
		    
		    <?php $logos = $args['logos']; ?>
		    <?php if (!empty($logos)) : ?>
		    	<?php foreach($logos as $logo) : ?>

			    <div class="award-logo" style="width: 20%;">
			    	<img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>">
			    </div>

				<?php endforeach; ?>
			<?php endif; ?>

		</div>	
		
</section>
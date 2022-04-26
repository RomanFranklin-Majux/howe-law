<section class="callout">
	<div class="callout-box">
		<?php $headline = $args['headline']; ?>
		<?php $phone = phoneNumber(); ?>
		<?php $headline = str_replace('{{phone}}', $phone, $headline); ?>
		<p class="headline"><?php echo $headline; ?></p>
		<?php get_template_part('template-parts/modules/button', null, $args['button']); ?>
		<p class="description"><?php echo $args['description']; ?></p>
	</div>
</section>

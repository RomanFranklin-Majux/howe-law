<div class="d-flex align-items-center h-100">
	<div class="video-wrapper">
	<?php if (preg_match('/wistia/', $args['video'])) : ?>
		<?php 
		//$video = '[embed]' . $args['video'] . '[/embed]';
		echo wp_oembed_get($args['video']); ?>
	<?php else : ?>
		<?php echo youTubeEmbed($args['video']); ?>
	<?php endif; ?>
	</div>
</div>
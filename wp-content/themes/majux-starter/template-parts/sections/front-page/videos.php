<section class="videos">
	<?php get_template_part('template-parts/modules/section-heading', null, $args['heading']); ?>

	<div class="row d-flex flex-wrap row-cols-2 g-5">
		<?php $videos = $args['videos']; ?>
		<?php foreach ($videos as $video) : ?>
			<div class="col">
			<?php 
				switch($video['video_type']) : 
					case 'embed':
						echo $video['video_embed'];
					break;

					case 'youtube':
						echo $video['youtube_link'];
					break;

					default:
						echo 'whoops';
					break;
				endswitch;
				?>
			</div>
		<?php endforeach; ?>	
	</div>

</section>
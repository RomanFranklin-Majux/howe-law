<section class="three-columns">

	<?php get_template_part('template-parts/modules/section-heading', null, $args['heading']); ?>

	<div class="row">
		<?php for ($i = 1; $i < 4; $i++) : ?>
			<div class="col">
				<?php $content = $args['column_' . $i . '_content']; ?>
				<div class="column-image">
					<img src="<?php echo $content['image']['url']; ?>" alt="<?php echo $content['image']['alt']; ?>">
				</div>
				<div class="description">
					<?php echo $content['text']; ?>
				</div>
			</div>
		<?php endfor; ?>		
	</div>

</section>
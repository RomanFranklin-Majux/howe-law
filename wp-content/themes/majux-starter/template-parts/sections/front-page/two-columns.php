<section class="two-columns">

	<?php get_template_part('template-parts/modules/section-heading', null, $args['heading']); ?>

	<div class="row gx-5">
		<?php for ($i = 1; $i < 3; $i++) : ?>
			<?php $col = ($i == 1) ? $args['column_sizes'] : 'col'; ?>
			<div class="<?php echo $col; ?>">
				<?php $type = $args['column_' . $i . '_content']['content_type']; ?>
				<?php get_template_part('template-parts/modules/column', $type, $args['column_' . $i . '_content']); ?>
			</div>
		<?php endfor; ?>		
	</div>

</section>
<footer class="footer container-fluid pt-5 px-3">
	<div class="container-fluid px-5">
		<div class="row pb-5">
			<div class="col-md-6 pe-4 footer-col-1">
				<div class="row">
					<div class="col-md-6">
						<?php if ( is_active_sidebar( 'footer_col_1' ) ) : ?>
							<?php dynamic_sidebar( 'footer_col_1' ); ?>
						<?php endif; ?>					
					</div>

					<div class="col-md-6">
						<?php if ( is_active_sidebar( 'footer_col_2' ) ) : ?>
							<?php dynamic_sidebar( 'footer_col_2' ); ?>
						<?php endif; ?>							
					</div>
				</div>
			</div>
			<div class="col-md-6 footer-col-3">
				<?php if ( is_active_sidebar( 'footer_col_3' ) ) : ?>
					<?php dynamic_sidebar( 'footer_col_3' ); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="row footer-bottom force-full-width py-5">
			<div class="col">
				<p class="small text-center mb-0"><?php echo get_field('footer_copy', 'option'); ?></p>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>
</body></html>
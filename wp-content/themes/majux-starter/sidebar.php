<div class="col-3 d-none d-lg-block pe-0">
	<div class="sidebar py-5">
	
	<?php if ( is_active_sidebar( 'interior_sidebar' ) ) : ?>
		
		<?php dynamic_sidebar( 'interior_sidebar' ); ?>

	<?php else : ?>

		<div class="sidebar-widget">
			<p class="widget-title text-center">Get Started</p>
			<?php 
				wp_nav_menu( array(
					'theme_location' 	=> 'default-sidebar-menu',
					'menu_id'        	=> 'default-sidebar-menu',
					'menu_class'      	=> 'sidebar-widget-links',
					'fallback_cb'		=> 'menuFallback'
				) );
			?>		
		</div>

	<?php endif; ?>

	</div>	
</div>

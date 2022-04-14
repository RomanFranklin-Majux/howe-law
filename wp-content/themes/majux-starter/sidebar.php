<div class="col-4 d-none d-lg-block pe-0">
	<div class="sidebar py-5">
		<div class="sidebar-widget">
			<p class="widget-title text-center">Get a Free Consultation</p>
			<?php //echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="50"]'); ?>			
		</div>
		<div class="sidebar-results">
			
			<?php //get_template_part('template-parts/section-sidebar-results'); ?>

		</div>
		<div class="sidebar-widget">
			<p class="widget-title text-center mb-5">Resources</p>
			<?php 
				wp_nav_menu( array(
					'theme_location' 	=> 'sidebar-menu-1',
					'menu_id'        	=> 'sidebar-menu-1',
					'menu_class'      	=> 'sidebar-widget-links',
					'fallback_cb'		=> 'menuFallback'
				) );
			?>	
		</div>
	</div>	
</div>

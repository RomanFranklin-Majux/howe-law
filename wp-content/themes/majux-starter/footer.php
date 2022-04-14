<footer class="footer container-fluid pt-5 pb-3">
	<div class="container">
		<div class="row pb-5">
			<div class="col-md-6 pe-4 footer-col-1">
				<p class="h2">Footer Copy</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum lobortis sem congue cursus. Aliquam faucibus laoreet neque vitae tristique. Quisque turpis ligula, posuere a finibus at, convallis id nunc. Donec ultrices, turpis nec consequat scelerisque, ipsum diam commodo massa, et congue dui diam a nisi. Sed mattis cursus sapien in efficitur. Vivamus et est est. Sed et dui urna. Duis placerat varius consectetur. Maecenas et feugiat sapien, sit amet ultrices mauris. Suspendisse potenti. Nunc porta tellus vitae est dapibus, porttitor bibendum lacus fermentum. Maecenas laoreet risus ac dignissim malesuada.</p>
			</div>
			<div class="col-md ps-4 footer-col-2">
				<p class="quick-links">Quick Links</p>
				<?php wp_nav_menu( array(
			        'theme_location' 	=> 'footer-menu',
			        'menu_id'        	=> 'primary-menu',
			        'menu_class'      	=> 'list-style-none',
			        'container'       	=> 'div',
			        'container_class' 	=> 'footer-menu',
			        'fallback_cb'		=> 'menuFallback'
			      ) ); ?>					
			</div>
			<div class="col-md-4 footer-col-3">
				<div class="d-flex align-items-center mb-5 address">
					<div class="icon">
						<img src="<?php echo templateDir(); ?>/assets/images/icons/icon-map-marker.png" alt="">
					</div>
					<p class="address"><?php echo getAddress(); ?></p>	
				</div>

				<div class="d-flex align-items-center mb-5 call-us">
					<div class="icon">
						<img src="<?php echo templateDir(); ?>/assets/images/icons/icon-phone-white.png" alt="">
					</div>
					<div class="ms-5 small">Call Us Today - <?php echo phoneNumber(); ?></div>
				</div>

				<ul class="list-style-none social ms-5">
					<li>
						<a href="#">
							Facebook
						</a>
					</li>
					<li>
						<a href="#">
							LinkedIn
						</a>
					</li>
					<li>
						<a href="#">
							Email
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="small text-center">Copyright <?php echo date('Y'); ?> &copy; Majux Marketing</p>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>
</body></html>
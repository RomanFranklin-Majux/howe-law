<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<div class="blog-item">
		<a href="<?php echo get_the_permalink(); ?>" class="row">
			<div class="col-md-3 featured-image">
				<?php $image = get_the_post_thumbnail_url(); ?>
				<?php if (empty($image)) : $image = templateDir() . '/assets/images/practice-area-default.jpg'; endif; ?>
				<img src="<?php echo $image; ?>" alt="">
			</div>
			<div class="col blog-details d-flex flex-column">
				<h2><?php the_title(); ?></h2>
				<div class="excerpt"><?php the_excerpt(); ?></div>
				<p class="read-more text-end">Read More &raquo;</p>	
			</div>
		</a>
	</div>


<?php endwhile; endif; ?>
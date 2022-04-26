<?php $featured = get_the_post_thumbnail_url(); ?>
<?php if (empty($featured)) : $featured = templateDir() . '/assets/images/masthead/default-masthead.jpg'; endif; ?>

<?php $title = get_the_title(); ?>

<?php /* Archive */ ?>
<?php if (is_home()) : $title = get_the_title( get_option('page_for_posts', true) ); endif; ?>

<div class="masthead header-fix" style="background-image: url('<?php echo $featured; ?>'); background-size: cover;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 mx-auto masthead-title">
				<h1><span><?php echo $title; ?></span></h1>
			</div>
		</div>		
	</div>	
</div>
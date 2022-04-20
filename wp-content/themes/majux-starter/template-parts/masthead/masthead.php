<?php $featured = get_the_post_thumbnail_url(); ?>
<?php if (empty($featured)) : $featured = templateDir() . '/assets/images/masthead/default-masthead.jpg'; endif; ?>

<?php $title = get_the_title(); ?>

<?php /* Archive */ ?>
<?php if (is_home()) : $title = get_the_title( get_option('page_for_posts', true) ); endif; ?>

<div class="masthead header-fix">
	<h1><?php echo $title; ?></h1>
</div>
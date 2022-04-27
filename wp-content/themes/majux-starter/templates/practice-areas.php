<?php /* Template Name: Practice Areas Page */ ?>

<?php get_header(); ?>


	<?php /* Masthead */ ?>
	<?php get_template_part('template-parts/masthead/masthead'); ?>


	<?php /* Content Wrapper Start */ ?>
	<?php $sidebar = true; ?>
	<?php get_template_part('template-parts/content/page-content', 'start', $sidebar); ?>


		<?php /* Main Content */ ?>
		<?php get_template_part('template-parts/content/loop') ?>

		<?php 
		$ID = get_field('practice_areas_parent', 'option'); 
		if (!empty($ID)) : $ID = $post->ID; endif; 

		$children = get_pages(array('parent' => $ID, 'depth' => 1)); ?>

		<div class="row g-5">

			<?php foreach($children as $child) : ?>
				<div class="col-md-4 practice-area item">
					<a href="<?php echo get_the_permalink($child->ID); ?>">
						<div class="item-image">
							<?php $image = get_field('image', $child->ID); ?>
							<?php if (!empty($image)) : ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							<?php endif; ?>
						</div>
						<div class="details">
							<span class="name"><?php echo get_the_title($child->ID); ?></span>
						</div>
					</a>	
				</div>
			<?php endforeach; ?>

		</div>

	<?php /* Content Wrapper End / Sidebar */ ?>
	<?php get_template_part('template-parts/content/page-content', 'end', $sidebar); ?>


	<?php /* Sections */ ?>
	<?php get_template_part('template-parts/sections/interior-page-sections'); ?>



<?php get_footer(); ?>
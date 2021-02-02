<?php /*Displays Page*/ get_header(); ?>
<div class="container">
<div class="page">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>

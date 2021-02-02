<?php /*Displays Posts*/ get_header(); ?>
<div class="container">
	<div class="post">
    <?php
      if (have_posts()):
        while (have_posts()) : the_post();
          the_title();
          the_content();
        endwhile;
      else:
        echo '<p>Sorry, no posts matched your criteria.</p>';
      endif;
    ?>
	</div>

	<?php get_footer(); ?>

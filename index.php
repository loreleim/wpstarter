<?php /*Fallback Page*/
get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}
} else {
  echo '<p>Sorry, no posts matched your criteria.</p>';
}

get_footer();

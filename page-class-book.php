<?php
/**
 * Template Name: Book Online Page
 */
get_header();
?>

<main id="primary" class="site-main book-online-template">
	<?php
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
	?>
</main>

<?php get_footer(); ?>
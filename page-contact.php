<?php
/**
 * Template Name: Contact Page
 */
get_header();

while (have_posts()) :
    the_post();
    the_content();
endwhile;

get_footer();
?>
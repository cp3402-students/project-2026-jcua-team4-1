<?php get_header(); ?>
<main class="site-main">
    <div class="page-hero">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container page-content">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>
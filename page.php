<?php get_header(); ?>

<main class="site-main">

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1><?php bloginfo('name'); ?></h1>
            <p class="hero-tagline"><?php bloginfo('description'); ?></p>
            <a href="https://play.tennis.com.au/KalyndaChaseRegionalTennisCentre" 
               class="btn-primary" target="_blank">
                Book a Court Now
            </a>
        </div>
    </section>

    <!-- Get Started Section -->
    <section class="get-started">
        <div class="container">
            <?php
            // Pull content from the Home page in WordPress
            $home = get_page_by_path('home');
            if ( $home ) {
                echo apply_filters('the_content', $home->post_content);
            }
            ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
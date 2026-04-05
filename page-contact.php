<?php get_header(); ?>
<main class="site-main">
    <div class="page-hero">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container page-content">
        <div class="contact-grid">
            <div class="contact-details">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>📞 <a href="tel:0421177764">0421 177 764</a></p>
                    <p>✉️ <a href="mailto:kalyndachasetennis@outlook.com">kalyndachasetennis@outlook.com</a></p>
                    <p>📍 47-59 Kalynda Parade, TSV</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
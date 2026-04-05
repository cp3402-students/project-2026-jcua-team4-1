<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KC_Tennis_Blast
 */

<<<<<<< HEAD
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
=======
<main class="site-main front-page">

    <!-- Hero -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Believe – Learn – Achieve – Succeed</h1>
            <p class="hero-subtitle">in Tennis!</p>
            <div class="hero-buttons">
                <a href="https://play.tennis.com.au/KalyndaChaseRegionalTennisCentre" 
                   class="btn-primary" target="_blank">Book a Court Now</a>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path('classes') ) ); ?>" 
                   class="btn-secondary">View Classes</a>
            </div>
        </div>
    </section>

    <!-- Get Started -->
    <section class="get-started">
        <div class="container">
            <h2>GET STARTED</h2>
            <p>Looking for an exciting NEW experience? Tennis Blast Kalynda Chase is the perfect spot to hone and improve your skills or to try something new. Our expert coaches care deeply about your Tennis journey!</p>
            <a href="https://play.tennis.com.au/KalyndaChaseRegionalTennisCentre" 
               class="btn-primary" target="_blank">Hire a Court Now</a>
        </div>
    </section>

    <!-- Coaches -->
    <section class="coaches">
        <div class="container">
            <h2>THE COACHES</h2>
            <p>Meet the Tennis Blast team! Find out more about why we have the best coaches around!</p>
            <div class="coaches-grid">
                <div class="coach-card">
                    <h3>Head Coach</h3>
                    <p>Tim Robinson has been Head Coach at Kalynda Chase Tennis Centre for 8 years, with 25 years of coaching experience. Available for private Tennis classes.</p>
                    <a href="tel:0421177764" class="btn-primary">Book Class Now</a>
                </div>
                <div class="coach-card">
                    <h3>Performance Coach</h3>
                    <p>Dan has been with the club for 7 years. Owner of 360 Performance, Dan assists players with Tennis skills and tailored exercise and performance plans.</p>
                    <a href="tel:0421177764" class="btn-primary">Book Class Now</a>
                </div>
                <div class="coach-card">
                    <h3>Hot Shot Coaches</h3>
                    <p>Our coaching programs are designed for beginner and intermediate players right through to polished pros! Group and private lessons available.</p>
                    <a href="tel:0421177764" class="btn-primary">Book Class Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="cta-banner">
        <div class="container">
            <h2>Ready to Get on the Court?</h2>
            <p>10 courts available — 24/7 court hire. Book yours today!</p>
            <a href="https://play.tennis.com.au/KalyndaChaseRegionalTennisCentre" 
               class="btn-primary" target="_blank">Book a Court Now</a>
        </div>
    </section>
>>>>>>> c72133f55e17137ed51bd3e1e13960090f089cc6

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

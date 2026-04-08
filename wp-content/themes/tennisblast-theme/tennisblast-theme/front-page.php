<<<<<<< HEAD
<?php
/**
 * The template for displaying the front page
 *
 * @package tennisblast-theme
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php while ( have_posts() ) : the_post(); ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="hero-image">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>
        <?php endif; ?>

        <div class="hero-content">
            <h1 class="hero-title">
                <?php the_title(); ?>
            </h1>
            <div class="hero-text">
                <?php the_content(); ?>
=======
<?php get_header(); ?>

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
>>>>>>> 4d3e12c87ecf40319f49f01df9eaa55a8547e2a1
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <?php endwhile; ?>

    <!-- Court Booking CTA Section -->
    <?php if ( get_theme_mod( 'cta_text' ) || get_theme_mod( 'cta_url' ) ) : ?>
    <section class="cta-section">
        <div class="cta-content">
            <?php if ( get_theme_mod( 'cta_text' ) ) : ?>
                <p class="cta-text"><?php echo esc_html( get_theme_mod( 'cta_text' ) ); ?></p>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'cta_url' ) ) : ?>
                <a href="<?php echo esc_url( get_theme_mod( 'cta_url' ) ); ?>" class="cta-button" target="_blank" rel="noopener noreferrer">
                    <?php echo esc_html( get_theme_mod( 'cta_button_text', __( 'Book Now', 'tennis-blast' ) ) ); ?>
                </a>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <!-- Coaches Section -->
    <section class="coaches-section">
        <div class="coaches-header">
            <h2><?php echo esc_html__( 'Meet the Coaches', 'tennis-blast' ); ?></h2>
        </div>

        <div class="coaches-grid">
            <?php
            $coaches_query = new WP_Query(
                array(
                    'post_type'      => 'coach',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                )
            );

            if ( $coaches_query->have_posts() ) :
                while ( $coaches_query->have_posts() ) :
                    $coaches_query->the_post();
            ?>
                <article id="coach-<?php the_ID(); ?>" class="coach-card">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="coach-image">
                            <?php the_post_thumbnail( 'medium' ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="coach-info">
                        <h3 class="coach-name"><?php the_title(); ?></h3>
                        <div class="coach-bio">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </article>

            <?php
                endwhile;
                wp_reset_postdata();
            else : ?>
                <p><?php echo esc_html__( 'No coaches found.', 'tennis-blast' ); ?></p>
            <?php endif; ?>
=======
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
>>>>>>> 4d3e12c87ecf40319f49f01df9eaa55a8547e2a1
        </div>
    </section>

</main>

<<<<<<< HEAD
<?php
get_footer();
=======
<?php get_footer(); ?>
>>>>>>> 4d3e12c87ecf40319f49f01df9eaa55a8547e2a1

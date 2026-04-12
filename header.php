<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="header-inner container">

        <!-- Logo / Site Name -->
        <div class="site-branding">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            <?php endif; ?>
        </div>

        <!-- Navigation -->
        <nav class="main-navigation" id="site-navigation" aria-label="Primary Navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => false,
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ) );
            ?>
        </nav>

        <!-- Book Now CTA -->
        <div class="header-cta">
            <a href="http://54.253.97.247/index.php/book-online/" 
               class="btn-book-now" target="_blank" rel="noopener">
                Book a Session
            </a>
        </div>

        <!-- Hamburger for mobile -->
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

    </div>
</header>

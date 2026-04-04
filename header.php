<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <header id="masthead" class="site-header">

        <div class="site-branding">
            <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo">
                    <?php the_custom_logo(); ?>
                </div>
            <?php else : ?>
                <div class="site-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        Tennis Blast Kalynda Chase
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                &#9776; Menu
            </button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                )
            );
            ?>
        </nav>

        <div class="header-cta">
            <a href="https://play.tennis.com.au/KalyndaChaseRegionalTennisCentre" 
               class="btn-book" 
               target="_blank" 
               rel="noopener noreferrer">
                Book Court Now
            </a>
        </div>

    </header>
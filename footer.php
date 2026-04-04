<footer class="site-footer">
    <div class="footer-contact">
        <h3>Contact</h3>
        <?php
            // Get contact info from WordPress customizer - no hardcoding!
            $phone = get_theme_mod( 'kc_phone', '0421 177 764' );
            $email = get_theme_mod( 'kc_email', 'kalyndachasetennis@outlook.com' );
            $address = get_theme_mod( 'kc_address', '47-59 Kalynda Parade, TSV' );
        ?>
        <p><a href="tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></p>
        <p><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
        <p><?php echo esc_html( $address ); ?></p>
    </div>

    <div class="footer-hours">
        <h3>Office Hours</h3>
        <p>Mon–Thu: 1:00pm – 9:00pm</p>
        <p>Friday: 1:00pm – 7:30pm</p>
        <p>Saturday: 7:00am – 11:00am, 3:00pm – 6:30pm</p>
        <p>Sunday: 3:30pm – 6:30pm</p>
    </div>

    <div class="footer-copy">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>

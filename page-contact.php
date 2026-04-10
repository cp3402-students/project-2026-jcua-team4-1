<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<main id="primary" class="site-main contact-page">

    <section class="contact-hero">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <p>Have a question about memberships, classes or tournaments? Get in touch and we'll be happy to help.</p>
        </div>
    </section>

    <section class="contact-details">
        <div class="container">

            <div class="contact-info">
                <h2>Contact Details</h2>

                <p><strong>Phone:</strong> 
                    <a href="tel:0421177764"><?php echo esc_html('0421 177 764'); ?></a>
                </p>

                <p><strong>Email:</strong> 
                    <a href="mailto:kalyndachasetennis@outlook.com">
                        <?php echo esc_html('kalyndachasetennis@outlook.com'); ?>
                    </a>
                </p>

                <p><strong>Address:</strong> 
                    <?php echo esc_html('47-59 Kalynda Parade, Townsville QLD'); ?>
                </p>

                <p><strong>Facebook:</strong> 
                    <a href="<?php echo esc_url('https://facebook.com/kctennisblast'); ?>" target="_blank">
                        Visit our Facebook
                    </a>
                </p>
            </div>

            <div class="contact-hours">
                <h2>Office Hours</h2>
                <p><strong>Court Hire:</strong> Available 24/7</p>

                <ul>
                    <li><strong>Monday – Thursday:</strong> 1:00 pm – 9:00 pm</li>
                    <li><strong>Friday:</strong> 1:00 pm – 7:30 pm</li>
                    <li><strong>Saturday:</strong> 7:00 am – 11:00 am | 3:00 pm – 6:30 pm</li>
                    <li><strong>Sunday:</strong> 3:30 pm – 6:30 pm</li>
                </ul>
            </div>

        </div>
    </section>

    <section class="contact-form-section">
        <div class="container">
            <h2>Send Us a Message</h2>

            <?php
            // Replace with your actual shortcode
            echo do_shortcode('[contact-form-7 id="123" title="Contact Form"]');
            ?>

            <!-- Fallback HTML form if plugin not used -->
            <form method="post" action="">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone">
                </div>

                <div class="form-group">
                    <label for="message">How can we help?</label>
                    <textarea name="message" required></textarea>
                </div>

                <button type="submit">Send Message</button>
            </form>

        </div>
    </section>

    <section class="contact-extra">
        <div class="container">
            <h2>Sponsors and Partners</h2>

            <ul>
                <li>
                    <a href="<?php echo esc_url('https://www.facebook.com/3SIXTYP'); ?>" target="_blank">
                        360 Performance
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url('https://urbex.com.au'); ?>" target="_blank">
                        Urbex
                    </a>
                </li>
            </ul>
        </div>
    </section>

</main>

<?php get_footer(); ?>
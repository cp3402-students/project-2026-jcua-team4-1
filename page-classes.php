<?php
/**
 * Template Name: Classes Page
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="classes-hero">
        <div class="classes-hero-content">
            <h1>CLASSES</h1>
            <p>Join our programs and book your class online anytime, from anywhere.</p>
        </div>
    </section>

    <section class="classes-page">

        <div class="class-item show">
            <div class="class-text">
                <span class="class-tag">KIDS PROGRAM</span>
                <h2>🎾 Hot Shots Program</h2>
                <p>
                    ANZ Tennis Hot Shots is tennis for kids. A program designed to help every child,
                    no matter their age or ability, jump in and start playing tennis. Played on smaller
                    courts with modified equipment — lighter racquets, lower nets and low compression balls.
                </p>

                <h4>Squads &amp; Age Groups</h4>
                <ul class="class-list">
                    <li><strong>Blue Ball</strong> – Ages 3–5</li>
                    <li><strong>Red Ball</strong> – Ages 5–8</li>
                    <li><strong>Orange Ball</strong> – Ages 8–10</li>
                    <li><strong>Green Ball</strong> – Ages 9+</li>
                    <li><strong>Club Tennis</strong> – Advanced</li>
                </ul>

                <a href="<?php echo esc_url(home_url('/book-classes')); ?>" class="class-btn">Book Online</a>
            </div>

            <div class="class-image-card">
                <div class="icon">🎾</div>
                <p>Hot Shots Program</p>
            </div>
        </div>

        <div class="class-item dark show">
            <div class="class-text">
                <span class="class-tag">GROUP TRAINING</span>
                <h2>💪 Squad Training</h2>
                <p>
                    Get active, make friends and have fun. Our squad training is available for anyone
                    who has just completed their Green Ball from Hot Shots, or anyone who wants to give tennis a try.
                </p>

                <ul class="class-list">
                    <li>Entry level squads</li>
                    <li>Talent development squads</li>
                    <li>Elite squad</li>
                </ul>

                <p>
                    Book your squad training online and choose from available class times.
                </p>

                <a href="<?php echo esc_url(home_url('/book-classes')); ?>" class="class-btn">Book Online</a>
            </div>

            <div class="class-image-card">
                <div class="icon">👥</div>
                <p>Squad Training</p>
            </div>
        </div>

        <div class="class-item show">
            <div class="class-text">
                <span class="class-tag">1-ON-1 COACHING</span>
                <h2>🏆 Private Classes</h2>
                <p>
                    Unleash your inner Tennis Champ. With multiple high quality coaches available,
                    we will have the perfect fit for you. Improve your ability and skills with specific
                    coaching sessions designed just for you.
                </p>

                <ul class="class-list">
                    <li>Available to any age group</li>
                    <li>Nationally accredited coaches</li>
                    <li>Tailored to your skill level</li>
                    <li>Flexible scheduling</li>
                </ul>

                <a href="<?php echo esc_url(home_url('/book-classes')); ?>" class="class-btn">Book Online</a>
            </div>

            <div class="class-image-card">
                <div class="icon">🏅</div>
                <p>Private Coaching</p>
            </div>
        </div>

        <div class="class-item dark show">
            <div class="class-text">
                <span class="class-tag">JUNIOR TOURNAMENTS</span>
                <h2>🚌 Tournament Travel</h2>
                <p>
                    Get your kid involved in tournaments. For each JDS tournament we organise
                    a shuttle bus and accommodation for all participants from our club.
                </p>

                <ul class="class-list">
                    <li>Shuttle bus organised</li>
                    <li>Accommodation arranged</li>
                    <li>Junior Development Series</li>
                    <li>Club group travel</li>
                </ul>

                <a href="<?php echo esc_url(home_url('/book-classes')); ?>" class="class-btn">Book Online</a>
            </div>

            <div class="class-image-card">
                <div class="icon">🚌</div>
                <p>Tournament Travel</p>
            </div>
        </div>

    </section>

    <section class="classes-cta">
        <div class="classes-cta-content">
            <h2>Book Your Class Online</h2>
            <p>Choose your class, check available schedules, and submit your booking online.</p>
            <a href="<?php echo esc_url(home_url('/book-classes')); ?>" class="class-btn dark-btn">Go to Booking Page</a>
        </div>
    </section>

</main>

<?php
get_footer();
?>
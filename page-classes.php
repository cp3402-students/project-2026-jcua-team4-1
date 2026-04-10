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
    <section class="classes-info-overview">
    <div class="classes-info-wrap">

        <div class="classes-info-card" data-target="class-detail-enrolment">
            <span class="classes-info-label">01</span>
            <h3>Enrolment Package</h3>
            <p>Welcome! Thank you for choosing Tennis Blast at Kalynda Chase Tennis Centre.</p>
            <button class="classes-see-more" type="button" data-target="class-detail-enrolment">See More</button>
        </div>

        <div class="classes-info-card" data-target="class-detail-program">
            <span class="classes-info-label">02</span>
            <h3>Coaching Program</h3>
            <p>We provide a wide range of coaching programs for both adults and children. Our coaches are fully</p>
            <button class="classes-see-more" type="button" data-target="class-detail-program">See More</button>
        </div>

        <div class="classes-info-card" data-target="class-detail-membership">
            <span class="classes-info-label">03</span>
            <h3>Membership Fact</h3>
            <p>What is Hot Shots membership?</p>
            <button class="classes-see-more" type="button" data-target="class-detail-membership">See More</button>
        </div>

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
    <section class="classes-detail-area" id="classes-detail-area" aria-live="polite">

    <div id="class-detail-enrolment" class="classes-detail-panel">
        <button class="classes-go-top" type="button">Go Top</button>
        <span class="classes-detail-tag">Enrolment Package</span>
        <h2>Enrolment Package</h2>
        <p>Welcome! Thank you for choosing Tennis Blast at Kalynda Chase Tennis Centre.</p>
        <p>
            <p>
                You are a valued member of our tennis community, and we look forward to a long and happy association with your family.
                </p>

                <p>
                We offer a wide range of professional coaching, fixtures, and social tennis programs for players of all standards and ages. In addition, we offer full restringing services and can cater for all your tennis needs.
                </p>

                <p>
                If you have any questions about our programs, please do not hesitate to contact our staff who are more than happy to help. Our business is teaching tennis and providing the highest quality tennis programs that deliver the fundamental skills, rules, and knowledge to have players playing and enjoying the game much sooner.
                </p>

                <p>
                The following pages contain some basic facts and information about our coaching programs, together with an enrolment form and payment authority. Please remember that this information must be updated should your personal and/or financial details change.
                </p>

                <p>
                Once again, thank you for choosing us and we look forward to providing you with the best possible tennis experience.
                </p>
        </p>
    </div>

    <div id="class-detail-program" class="classes-detail-panel">
        <button class="classes-go-top" type="button">Go Top</button>
        <span class="classes-detail-tag">Coaching Program</span>
        <h2>Coaching Program</h2>
        <p>We provide a wide range of coaching programs for both adults and children. Our coaches are fully</p>
        <p>
        Our coaches are fully qualified professionals who are continually up skilled and trained by our head coach Tim Robinson. Our coaches are also required to attend regular professional development seminars.
    </p>

    <h3>What should I bring?</h3>
    <p>
        A hat, comfortable shoes, water bottle and racquet. Racquets can be provided if needed.
    </p>

    <h3>How are groups determined?</h3>
    <p>
        After initial enrolment into a class suitable for their age group and skill level, students will be assessed by their coach. After assessment the students may be moved to a group that is more appropriate. Within each stage of development for each age group (Launch Pad or Blue, Red, Orange, Green, Yellow) there are three levels. Classes are guided by age however they are determined by competencies.
    </p>

    <!-- TABLE -->
    <div class="classes-table-wrap">
        <table class="classes-table">
            <thead>
                <tr>
                    <th>Program</th>
                    <th>Lesson length</th>
                    <th>Number / class</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hot Shots blue ball (Launch Pad)</td>
                    <td>30 minutes</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Hotshots</td>
                    <td>45 minutes</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>Yellow ball</td>
                    <td>60 minutes</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>Performance Squads</td>
                    <td>90 minutes</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>Adult Drills and Skills</td>
                    <td>60 minutes</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>Cardio tennis</td>
                    <td>60 minutes</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>Private lesson</td>
                    <td>-</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h3>Class size</h3>
    <p>
        Class sizes vary depending on the stage and program. It is very important to have a similar skill level across players within a group. Class ratios are listed above.
    </p>

    <h3>Program length</h3>
    <p>
        Our coaching program runs in conjunction with state school terms. We do not coach on public holidays or state school holidays. We do offer holiday programs during the state school holiday periods. We do coach on student free days, but not at schools. Your enrolment and payment authority remains in place until you notify us of your intention to cease.
    </p>

    <h3>Hotshots vs Gameplay</h3>
    <p>
        Hot shots coaching refers to the coaching program endorsed by Tennis Australia. It is a system of coaching and grading based on using modified equipment and coloured balls: red, orange, and green.
    </p>

    <p>
        Gameplay is the name given to the fixtures program where players are graded based on their ball colour and play against other players in a supervised environment. Gameplay is not a lesson but an ideal way to practice skills learned within the Hotshots coaching program.
    </p>

    <p>
        Hotshots gameplay is a coach supervised activity that allows students to practice what they have learned in their lesson. This program is highly recommended to accelerate skill acquisition and development.
    </p>

    <h3>Hotshots Challenge Days</h3>
    <p>
        A Hotshots challenge is typically run on a weekend. Players entered are placed into a tournament format draw to give them experience within tournament conditions. Such days are typically run twice in a school term and each event can go from 1 hour and 30 minutes up to 4 hours depending on the event and number of entrants.
    </p>

    </div>

    <div id="class-detail-membership" class="classes-detail-panel">
        <button class="classes-go-top" type="button">Go Top</button>
        <span class="classes-detail-tag">Membership Fact</span>
        <h2>Membership Fact</h2>
        <p>What is Hot Shots membership?</p>
        <h3>What is Hot Shots membership?</h3>
    <p>
        It is compulsory that all regular players and students at our centre become a member of our club.
        Becoming a member of the club entitles you to a range of exclusive offers and benefits including
        automatic membership with Tennis Queensland.
    </p>

    <p>
        The most important benefit, however, is insurance. All players must have accident and injury cover
        if they wish to be enrolled in our coaching, fixtures, gameplay, social and tournament program.
        Club membership provides automatic insurance cover.
    </p>

    <h3>What are the benefits?</h3>
    <p>
        As well as accident and injury insurance cover, membership with Tennis Queensland gives access to
        tournaments played throughout the country, discounts and benefits such as priority tickets to
        Brisbane Tennis and the Australian Open, and other events as advertised from time to time.
        Discounted court hire is also available for Hotshots and VIP members.
    </p>

    <h3>How much is membership?</h3>
    <p>
        Club memberships start from just $10 per annum, and memberships are per calendar year. We offer
        Social, Hot Shots, VIP, GOLD and PLATINUM memberships. Gold and Platinum memberships are available
        by direct debit for as little as $5 per week for singles or $9 per week for families
        (2 adults and 2 children).
    </p>

    <h3>Why do I have to pay this?</h3>
    <p>
        Our centre is affiliated with Tennis Queensland. Tennis Queensland is the governing body of our sport,
        and they charge a fee to their affiliates for membership to cover their costs in providing insurance
        cover, support and administration of our state tennis programs. This is a cost that is passed onto
        affiliated clubs such as ours and then shared equally across our players.
    </p>

    <h3>How do I claim on the insurance policy?</h3>
    <p>
        As a member of our club, you are covered for accidents and injuries sustained while you are involved
        in tennis-related activities. For more information about our policy and inclusions, please see
        the relevant membership and insurance information provided by the club.
    </p>
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
<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.classes-see-more');
    const panels = document.querySelectorAll('.classes-detail-panel');
    const goTopButtons = document.querySelectorAll('.classes-go-top');

    panels.forEach(function (panel) {
        panel.style.display = 'none';
    });

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');
            const targetPanel = document.getElementById(targetId);

            panels.forEach(function (panel) {
                panel.style.display = 'none';
                panel.classList.remove('active');
            });

            if (targetPanel) {
                targetPanel.style.display = 'block';

                setTimeout(function () {
                    targetPanel.classList.add('active');
                }, 10);

                setTimeout(function () {
                    targetPanel.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 100);
            }
        });
    });

    goTopButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const panel = this.closest('.classes-detail-panel');

            if (panel) {
                panel.classList.remove('active');

                setTimeout(function () {
                    panel.style.display = 'none';

                    const heroSection = document.querySelector('.classes-hero');
                    if (heroSection) {
                        heroSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }, 250);
            }
        });
    });
});
</script>
<?php
get_footer();
?>
<?php
/**
 * Template Name: Coaches Page
 */
get_header();
?>

<section class="coaches-page">
  <div class="container">

    <div class="coaches-header">
      <h1>Meet Our Coaches</h1>
      <p>
        Our coaching team is passionate about helping players grow with confidence,
        skill, and enjoyment at every stage of their tennis journey.
      </p>
    </div>
<div class="coach-info-section top-info">

  <div class="info-card">
    <h3>Professional Coaching</h3>
    <p>
      Our coaches are certified professionals with years of experience helping players
      improve their skills, confidence, and game performance.
    </p>
  </div>

  <div class="info-card highlight">
    <h3>All Skill Levels</h3>
    <p>
      Whether you are a beginner or an advanced player, we provide structured programs
      tailored to your individual needs and goals.
    </p>
  </div>

  <div class="info-card">
    <h3>Modern Training Methods</h3>
    <p>
      We use the latest coaching techniques focusing on technique, fitness, and mental
      strength to ensure continuous improvement.
    </p>
  </div>

</div>
    <div class="coaches-grid">

      <!-- Coach 1 -->
      <article class="coach-card" data-target="coach-detail-1">
        <div class="coach-card-inner">
          <div class="coach-image-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coach-1.jpg" alt="Coach 1">
            <div class="coach-hover">
              <span class="coach-mini-text">Strong discipline and fundamentals</span>
              <button class="coach-see-more" type="button" data-target="coach-detail-1">See More</button>
            </div>
          </div>
          <div class="coach-info-box">
            <h3>Coach Name Here</h3>
            <p>Senior Coach</p>
          </div>
        </div>
      </article>

      <!-- Coach 2 -->
      <article class="coach-card" data-target="coach-detail-2">
        <div class="coach-card-inner">
          <div class="coach-image-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/alani-burton.jpg" alt="Alani Burton">
            <div class="coach-hover">
              <span class="coach-mini-text">Supportive junior coaching energy</span>
              <button class="coach-see-more" type="button" data-target="coach-detail-2">See More</button>
            </div>
          </div>
          <div class="coach-info-box">
            <h3>Alani Burton</h3>
            <p>Trainee Qualified Coach</p>
          </div>
        </div>
      </article>

      <!-- Coach 3 -->
      <article class="coach-card" data-target="coach-detail-3">
        <div class="coach-card-inner">
          <div class="coach-image-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brad-taylor.jpg" alt="Brad Taylor">
            <div class="coach-hover">
              <span class="coach-mini-text">Competitive coaching with experience</span>
              <button class="coach-see-more" type="button" data-target="coach-detail-3">See More</button>
            </div>
          </div>
          <div class="coach-info-box">
            <h3>Brad Taylor</h3>
            <p>Coach B-Rad</p>
          </div>
        </div>
      </article>

      <!-- Coach 4 -->
      <article class="coach-card" data-target="coach-detail-4">
        <div class="coach-card-inner">
          <div class="coach-image-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/patrick-brennan.jpg" alt="Patrick Brennan">
            <div class="coach-hover">
              <span class="coach-mini-text">Positive attitude and training</span>
              <button class="coach-see-more" type="button" data-target="coach-detail-4">See More</button>
            </div>
          </div>
          <div class="coach-info-box">
            <h3>Patrick Brennan</h3>
            <p>Coach Paddy</p>
          </div>
        </div>
      </article>
<div class="coach-message-card">
  <div class="message-content">
    <h3>Train With Passion</h3>
    <p>
      Our coaching team is dedicated to helping every player improve,
      build confidence, and enjoy the game of tennis at every level.
    </p>
    <a href="#" class="message-btn">Book a Session</a>
  </div>
</div>
      <!-- Coach 5 -->
      <article class="coach-card" data-target="coach-detail-5">
        <div class="coach-card-inner">
          <div class="coach-image-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sophie-stephenson.jpg" alt="Sophie Stephenson">
            <div class="coach-hover">
              <span class="coach-mini-text">Confidence growth and encouragement</span>
              <button class="coach-see-more" type="button" data-target="coach-detail-5">See More</button>
            </div>
          </div>
          <div class="coach-info-box">
            <h3>Sophie Stephenson</h3>
            <p>Qualified Level 1 Coach</p>
          </div>
        </div>
      </article>

    </div>


</div>
    <!-- Detail Area -->
    <div id="coach-detail-wrapper" class="coach-detail-wrapper" aria-live="polite">

      <!-- Detail 1 -->
      <div id="coach-detail-1" class="coach-detail-panel">
        <div class="coach-detail-image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coach-1.jpg" alt="Coach 1">
        </div>
        <div class="coach-detail-content">
          <span class="coach-detail-tag">Senior Coach</span>
          <h2>Coach Name Here</h2>
          <p><strong>DOB:</strong> 20/04/2001</p>
          <p>
            Former NCAA collegiate tennis player with over 12 years of coaching experience
            working with players of all levels, from beginners to advanced competitors.
          </p>
          <p>
            Having coached across the Gold Coast, Brisbane, and the United States, this coach
            brings diverse international experience to every session.
          </p>
          <p>
            The coaching philosophy centres on discipline, problem solving, and strong fundamentals.
            Qualifications include a bachelor’s degree in health and physical health education,
            along with certifications in Strength &amp; Conditioning and coaching.
          </p>
        </div>
      </div>

      <!-- Detail 2 -->
      <div id="coach-detail-2" class="coach-detail-panel">
        <div class="coach-detail-image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/alani-burton.jpg" alt="Alani Burton">
        </div>
        <div class="coach-detail-content">
          <span class="coach-detail-tag">Trainee Qualified Coach</span>
          <h2>Alani Burton</h2>
          <p><strong>DOB:</strong> Not provided</p>
          <p>
            I started my coaching journey at the club where I grew up playing from the age of 5.
          </p>
          <p>
            I help deliver red ball, orange ball, and green ball group classes, and also assist
            with holiday camps during the school holidays.
          </p>
        </div>
      </div>

      <!-- Detail 3 -->
      <div id="coach-detail-3" class="coach-detail-panel">
        <div class="coach-detail-image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brad-taylor.jpg" alt="Brad Taylor">
        </div>
        <div class="coach-detail-content">
          <span class="coach-detail-tag">Coach B-Rad</span>
          <h2>Brad Taylor</h2>
          <p><strong>DOB:</strong> 11/10/1979</p>
          <p>
            Junior Development Level 1 Coach and Advantage Coach Qualified with 8 years’
            experience running a private coaching business and 3 years with Tennis Blast.
          </p>
          <p>
            Qualifications include Cert IV Recreation Sports Coaching, Cert IV Work Health and Safety,
            and Strength and Conditioning Level 1.
          </p>
          <p>
            I lead squad classes and private sessions for junior players aiming to improve
            their competitive tennis skills while helping them develop athletically and personally.
          </p>
        </div>
      </div>

      <!-- Detail 4 -->
      <div id="coach-detail-4" class="coach-detail-panel">
        <div class="coach-detail-image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/patrick-brennan.jpg" alt="Patrick Brennan">
        </div>
        <div class="coach-detail-content">
          <span class="coach-detail-tag">Coach Paddy</span>
          <h2>Patrick Brennan</h2>
          <p><strong>DOB:</strong> 03/10/2006</p>
          <p>
            Started tennis as a beginner in 2011 at age 5 and joined Tennis Blast as a staff
            member at age 14.
          </p>
          <p>
            I am passionate about maintaining a positive attitude and ensuring high standards of training.
          </p>
          <p>
            I lead Hot Shots group lessons, adult skills and drills, adult fixtures, and private lessons.
          </p>
        </div>
      </div>

      <!-- Detail 5 -->
      <div id="coach-detail-5" class="coach-detail-panel">
        <div class="coach-detail-image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sophie-stephenson.jpg" alt="Sophie Stephenson">
        </div>
        <div class="coach-detail-content">
          <span class="coach-detail-tag">Qualified Level 1 Coach</span>
          <h2>Sophie Stephenson</h2>
          <p><strong>DOB:</strong> 28/07/2000</p>
          <p>
            Started at Kalynda in 2018 as a junior coach and have now been coaching for 10 years.
          </p>
          <p>
            I love supporting kids to develop confidence in tennis and enjoy the sport,
            helping them grow both as players and as individuals.
          </p>
          <p>
            Creating a positive and encouraging environment is very important to me.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const buttons = document.querySelectorAll('.coach-see-more');
  const detailPanels = document.querySelectorAll('.coach-detail-panel');
  const detailWrapper = document.getElementById('coach-detail-wrapper');

  detailPanels.forEach(panel => {
    panel.style.display = 'none';
  });

  buttons.forEach(button => {
    button.addEventListener('click', function () {
      const targetId = this.getAttribute('data-target');
      const targetPanel = document.getElementById(targetId);

      detailPanels.forEach(panel => {
        panel.style.display = 'none';
        panel.classList.remove('active');
      });

      if (targetPanel) {
        targetPanel.style.display = 'grid';
        targetPanel.classList.add('active');

        setTimeout(() => {
          targetPanel.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }, 100);
      }
    });
  });
});

</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const buttons = document.querySelectorAll('.coach-see-more');
  const panels = document.querySelectorAll('.coach-detail-panel');

  panels.forEach(panel => {
    panel.style.display = 'none';
  });

  buttons.forEach(button => {
    button.addEventListener('click', function () {
      const targetId = this.getAttribute('data-target');
      const targetPanel = document.getElementById(targetId);

      panels.forEach(panel => {
        panel.style.display = 'none';
        panel.classList.remove('active');
      });

      if (targetPanel) {
        targetPanel.style.display = 'grid';
        targetPanel.classList.add('active');

        setTimeout(() => {
          targetPanel.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }, 100);
      }
    });
  });

  document.addEventListener('click', function (e) {
    if (e.target.classList.contains('coach-close-detail')) {
      const panel = e.target.closest('.coach-detail-panel');
      if (panel) {
        panel.style.display = 'none';
      }
    }
  });
});
</script>
<?php get_footer(); ?>
<?php
  include('header.php');
?>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>J</span>ames <span>C</span>ook <span>U</span>niversity <span>S</span>ingapore</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Courses">Courses</a></li>
            <li><a href="#projects" data-after="Blogs">Blogs</a></li>
            <li><a href="#about" data-after="About Us">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <?php
      include('home.php');
    ?>
  </section>
  <!-- End Hero Section  -->
  <section id="services">
    <?php
    include('courses.php');
    ?>
  </section>
  <!-- Service Section -->
  
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <?php
      include('blogs.php');
    ?>
  </section>
  <!-- End Projects Section -->

  <!-- Events Section -->

  <section id="events">
  <?php
      include('events.php');
    ?>
  </section>

  <!-- End Events Section -->

  <!-- Rank Section -->

  <section id="services">
    <?php
      include('rank.php');
    ?>
  </section>

  <!-- End Rank Section -->

  <!-- Admission Section -->

  <section id="services">
    <?php
      include('admission.php');
    ?>
  </section>

  <!-- End Admission Section -->

  <!-- About Section -->
  <section id="about">
    <?php
      include('about.php');
    ?>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <?php
      include('contact.php');
    ?>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <?php
      include('footer.php');
    ?>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>
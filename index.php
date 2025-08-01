<?php
// tanggal lahir
$tanggal = new DateTime('1993-04-08');

// tanggal hari ini
$today = new DateTime('today');

// tahun
$y = $today->diff($tanggal)->y;

// bulan
$m = $today->diff($tanggal)->m;

// hari
$d = $today->diff($tanggal)->d;

include 'konek.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yehezkiel S T</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js?render=6LdLo6spAAAAAO46WwArY_t1n6QoeY_lChqDi_Yy"></script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LdLo6spAAAAAO46WwArY_t1n6QoeY_lChqDi_Yy', {
        action: 'contact_form'
      }).then(function(token) {
        document.getElementById('recaptcha_token').value = token;
      });
    });
  </script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    canvas {

      position: absolute;
      margin: 0;
      padding: 0;
      display: block;
      touch-action: none;
    }

    a h6 {
      font-size: 18px;
      /* Adjust the font size as needed */
      color: transparent;
      /* Make the text transparent */
      text-shadow: 0 0 10px rgba(255, 0, 0, 0.7),
        /* Red glow effect */
        0 0 20px rgba(255, 0, 0, 0.5),
        /* Red glow effect */
        0 0 30px rgba(255, 0, 0, 0.3),
        /* Red glow effect */
        0 0 40px rgba(255, 0, 0, 0.1);
      /* Red glow effect */
      background-image: linear-gradient(90deg, #ff00ff, #00ffff);
      /* Gradient background */
      background-clip: text;
      /* Clip the background to the text */
      -webkit-background-clip: text;
      /* Clip for older webkit browsers */
      -webkit-text-fill-color: transparent;
      /* Transparent text fill for older webkit browsers */
    }

    @keyframes blink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    a h6 {
      animation: blink 1s infinite;
      /* Apply the blinking animation */
    }

    /* CSS untuk tombol ketika dalam status disabled */
    #sendMessageBtn[disabled] {
      background-color: #ccc;
      /* Warna latar belakang saat tombol nonaktif */
      color: #888;
      /* Warna teks saat tombol nonaktif */
    }

    /* CSS untuk tombol ketika dalam status enabled */
    #sendMessageBtn:not([disabled]) {
      background-color: #007bff;
      /* Warna latar belakang saat tombol aktif */
      color: #fff;
      /* Warna teks saat tombol aktif */
    }

    /* Tombol musik di kiri bawah */
    #music-toggle {
      position: fixed;
      bottom: 20px;
      left: 20px;
      background-color: white;
      border: none;
      border-radius: 50%;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      z-index: 999;
    }

    #music-toggle img {
      width: 24px;
      height: 24px;
    }
  </style>

</head>

<body>
  <!-- Elemen audio -->
  <audio id="background-music" loop>
    <source src="assets/music.mp3" type="audio/mpeg">
  </audio>

  <!-- Tombol toggle musik -->
  <button id="music-toggle" onclick="toggleMusic()">
    <img id="music-icon" src="https://img.icons8.com/ios-filled/50/000000/musical-notes.png" alt="Toggle Musik" />
  </button>
  <!-- ======= Header ======= -->


  <canvas> </canvas>
  <header id="header">
    <div class="container">

      <h1><a href="index.php">Yehezkiel S T</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I design and code <span>beautifully</span> things, and I love what I do.</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <!-- <li><a class="nav-link" href="#services">Services</a></li>-->
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="https://twitter.com/kiel888897" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://github.com/kiel888897" class="google-plus"><i class="bi bi-github"></i></a>
        <a href="https://www.instagram.com/kiel888897/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/kiel888897" class="linkedin"><i class="bi bi-linkedin"></i></a>


      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>UI/UX &amp; Programer</h3>
          <p class="fst-italic">
            Hello! My name is Yehezkiel and I enjoy creating things creative, dynamic products from start to finish.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>08 April 1993</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.noncof.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 8127 50971 29</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bali, Indonesia</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo "" . $y . " year " . $m . " month " . $d . " day"; ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>kiel888897@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>github:</strong><a href="https://github.com/kiel888897"> <span>kiel888897</span></a></li>
              </ul>
            </div>
          </div>
          <p>
            Graduate of computer science with experience working across the full-stack of software development. I have built 30+ projects on 7 small teams and am looking for a role with programing where I can grow and continue to learn from other experienced team members.
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <!--<div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div>-->
    <!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">95%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <!--<div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Lorem Ipsum</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Dolor Sitema</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Sed perspiciatis</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Magni Dolores</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Nemo Enim</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Eiusmod Tempor</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Midela Teren</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Pira Neve</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Dirada Pack</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Moton Ideal</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Verdo Park</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div>
      </div>

    </div>-->
    <!-- End Interests -->

    <!-- ======= Testimonials ======= -->

    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
        <a href="testis.php">
          <h5>Let's make something special &#128540;</h5>
          <h6>Click Here</h6>
        </a><br>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <?php
          $sql = mysqli_query($conn, "select * from testimoni where status='0'");
          $cnt = 1;
          while ($row = mysqli_fetch_array($sql)) {
          ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $row['pesan']; ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/<?php echo $row['foto']; ?>" class="testimonial-img" alt="">
                <h3><?php echo $row['nama']; ?></h3>
                <h4><?php echo $row['job']; ?></h4>

              </div>
            </div>
          <?php } ?><!-- End testimonial item -->



        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Yehezkiel Saputra</h4>
            <p><em>Innovative, deadline-driven programmer with 2+ years of experience designing and developing user-centric application systems from initial concept to polished final output.</em></p>
            <p>
            <ul>
              <li>Bali, Indonesia</li>
              <li>+62-812-7509-7129</li>
              <li>kiel888897@gmail.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          <!--<div class="resume-item">
            <h4>Master of Fine Arts &amp; Graphic Design</h4>
            <h5>2015 - 2016</h5>
            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
          </div>-->
          <div class="resume-item">
            <h4>Bachelor of Science &amp; Technology</h4>
            <h5>2012 - 2016</h5>
            <p><em>Sultan Syarif Kasim Riau State Islamic University, Indonesia</em></p>
            <p>Studying at Uin Suska Riau Indonesia, majoring in informatics engineering, faculty of science and technology.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Experience</h3>
          <div class="resume-item">
            <h4>Backend &amp; Front End Engineer – Multiweb.id</h4>
            <h5>2020 - 2024</h5>
            <p><em>Bali, Indonesia, ID </em></p>
            <p>
              programmers to develop our authoring tools and e-commerce applications. Collaborate closely with Product Head to track our tactical objectives, improve technical lead and completion frequency.
              <!--
            <ul>
              <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
              <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
              <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
              <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
            </ul>-->
            </p>
          </div>
          <div class="resume-item">
            <h4>Full Stack Web Developer - TOTAL BALI</h4>
            <h5>2024 - Present</h5>
            <p><em>Bali, Indonesia, ID </em></p>
            <p>
            <ul>
              <li>Designing and developing responsive and attractive user interfaces (UI) using HTML, CSS, and JavaScript.</li>
              <li>Managing HTTP requests, session management, user authorization, and authentication.</li>
              <li>Performing database maintenance tasks, such as data backup and restore, as well as database performance tuning.</li>
              <li>Ensuring overall performance of web applications by optimizing code, caching data, and using other performance optimization techniques.</li>
              <li>Collaborating with other development team members, including UI/UX designers, back-end developers, and project managers, to efficiently achieve project goals.</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <!-- <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Sed ut perspiciatis</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Magni Dolores</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Dele cardo</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Divera don</a></h4>
            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          </div>
        </div>

      </div>

    </div>
  </section>-->
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Service</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/videocall.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Video Broadcast</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/videocall.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Video Broadcast"><i class="bx bx-plus"></i></a>
                <!-- <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>-->
                <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/forum.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Forum</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/forum.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Forum"><i class="bx bx-plus"></i></a>
                <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/akts.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Accounting</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/akts.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Accounting"><i class="bx bx-plus"></i></a>
                <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/rec.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Recordings</h4>
              <p>Service</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rec.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Recordings"><i class="bx bx-plus"></i></a>
                <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/seken.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Online Shop</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/seken.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Online Shop"><i class="bx bx-plus"></i></a>
                <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/suportmw.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Support</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/suportmw.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Support"><i class="bx bx-plus"></i></a>
                <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/tts.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Text to Speech</h4>
              <p>Service</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/tts.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Text to Speech"><i class="bx bx-plus"></i></a>
                <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/editur.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Text Editor</h4>
              <p>Service</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/editur.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Text Editor"><i class="bx bx-plus"></i></a>
                <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/parama.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Company Profile</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/parama.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Company Profile"><i class="bx bx-plus"></i></a>
                <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Denpasar, Bali, 80112</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="https://twitter.com/kiel888897" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/halogeng.az" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/kiel888897/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/kiel888897" class="google-plus"><i class="bi bi-github"></i></a>
              <a href="https://www.linkedin.com/in/kiel888897" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>kiel888897@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+62 81275 0971 29</p>
          </div>
        </div>
      </div>

      <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4"> -->
      <form action="contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>

        <input type="hidden" id="recaptcha_token" name="recaptcha_token">

        <div class="text-center"><button type="submit">Send Message</button></div>
        <!-- <div class="text-center"><button type="submit" id="sendMessageBtn" >Send Message</button></div> -->
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    Designed by <a href="https://noncof.com/">Noncof</a>
  </div>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    var canvas = document.querySelector('canvas');
    canvas.height = window.innerHeight;
    canvas.width = window.innerWidth;
    c = canvas.getContext('2d');

    window.addEventListener('resize', function() {
      canvas.height = window.innerHeight;
      canvas.width = window.innerWidth;

      initCanvas();
    });

    var mouse = {
      x: undefined,
      y: undefined
    };

    window.addEventListener('mousemove',
      function(event) {
        mouse.x = event.x;
        mouse.y = event.y;
        drawCircles();
      });

    window.addEventListener("touchmove",
      function(event) {
        let touch = event.touches[0];
        mouse.x = touch.clientX;
        mouse.y = touch.clientY;
        drawCircles();
      });


    function Circle(x, y, radius, vx, vy, rgb, opacity, birth, life) {
      this.x = x;
      this.y = y;
      this.radius = radius;
      this.minRadius = radius;
      this.vx = vx;
      this.vy = vy;
      this.birth = birth;
      this.life = life;
      this.opacity = opacity;

      this.draw = function() {
        c.beginPath();
        c.arc(this.x, this.y, this.radius, Math.PI * 2, false);
        c.fillStyle = 'rgba(' + rgb + ',' + this.opacity + ')';
        c.fill();
      };

      this.update = function() {
        if (this.x + this.radius > innerWidth || this.x - this.radius < 0) {
          this.vx = -this.vx;
        }

        if (this.y + this.radius > innerHeight || this.y - this.radius < 0) {
          this.vy = -this.vy;
        }

        this.x += this.vx;
        this.y += this.vy;

        this.opacity = 1 - (frame - this.birth) * 1 / this.life;

        if (frame > this.birth + this.life) {
          for (let i = 0; i < circleArray.length; i++) {
            if (this.birth == circleArray[i].birth && this.life == circleArray[i].life) {
              circleArray.splice(i, 1);
              break;
            }
          }
        } else {
          this.draw();
        }
      };

    }

    var circleArray = [];

    function initCanvas() {
      circleArray = [];
    }

    var colorArray = [
      '24,210,110',
      '9,80,100',
      '0,128,255'
    ];


    function drawCircles() {
      for (let i = 0; i < 6; i++) {
        let radius = Math.floor(Math.random() * 4) + 2;
        let vx = Math.random() * 2 - 1;
        let vy = Math.random() * 2 - 1;
        let spawnFrame = frame;
        let rgb = colorArray[Math.floor(Math.random() * colorArray.length)];
        let life = 100;
        circleArray.push(new Circle(mouse.x, mouse.y, radius, vx, vy, rgb, 1, spawnFrame, life));

      }
    }

    var frame = 0;

    function animate() {
      requestAnimationFrame(animate);
      frame += 1;
      c.clearRect(0, 0, innerWidth, innerHeight);
      for (let i = 0; i < circleArray.length; i++) {
        circleArray[i].update();
      }

    }

    initCanvas();
    animate();

    // This is just for demo purposes :
    for (let i = 1; i < 110; i++) {
      (function(index) {
        setTimeout(function() {
          mouse.x = 100 + i * 10;
          mouse.y = 100;
          drawCircles();
        }, i * 10);
      })(i);
    }
  </script>
  <script>
    const music = document.getElementById('background-music');
    const icon = document.getElementById('music-icon');
    music.volume = 0.2; // 20% volume
    let isPlaying = false;

    function toggleMusic() {
      if (isPlaying) {
        music.pause();
        icon.src = "https://img.icons8.com/ios-filled/50/000000/mute.png"; // ikon mute
      } else {
        music.play();
        icon.src = "https://img.icons8.com/ios-filled/50/000000/musical-notes.png"; // ikon musik
      }
      isPlaying = !isPlaying;
    }
  </script>


</body>

</html>
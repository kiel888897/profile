<?php
include('konek.php');
if($_POST['upload']){
  $settdah    = $_POST['nama'];
  $job    = $_POST['job'];
  $testi    = $_POST['testi'];

$rand = rand();
  $ekstensi_diperbolehkan    = array('jpg','png','jpeg','gif');
  $nama    = $_FILES['file_ijazah']['name'];
  $x        = explode('.', $nama);
  $ekstensi    = strtolower(end($x));
  $ukuran        = $_FILES['file_ijazah']['size'];
  $file_tmp    = $_FILES['file_ijazah']['tmp_name']; 

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      if($ukuran < 500044070){ 
          move_uploaded_file($file_tmp, 'assets/img/testimonials/'.$rand.'_'.$nama);
  $file_gambar = $rand.'_'.$nama;
          $sql    = mysqli_query($conn,"INSERT INTO testimoni VALUES(NULL, '$settdah','$job','$file_gambar','$testi','0')");
          if($sql){
            
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Testimony has been Submit.")';  
            echo '</script>'; 
            echo '<script type ="text/JavaScript">window.location.href="./index.php#about"</script>';
  
          }
          else{
            echo '<script>alert("Testimony failed to submit!")</script>';
          }
      }
      else{
        echo '<script>alert("FILE SIZE TOO BIG!")</script>';
      }
  }
  else{
    echo '<script>alert("UPLOAD FILE EXTENSIONS ARE NOT ALLOWED!")</script>';
  }
}
?>
<style>
html {
  height: 100%;
}

body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.menu-box {
  position: fixed;
  top: 50px;
  right: 30px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}


.login-box {
  position: fixed;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #18d26e;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box textarea {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: 1px ;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #18d26e;
  font-size: 12px;
}
.login-box .user-box textarea:focus ~ label,
.login-box .user-box textarea:valid ~ label {
  top: -20px;
  left: 0;
  color: #18d26e;
  font-size: 12px;
}
.ktl {
  padding: 2px 2px ;
  border:1px;
  position: absolute;
  top:10px;
  right: 20px;
}
.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #18d26e;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 10px;
  letter-spacing: 4px
}

.red a:hover {
  background: #D72020;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #D72020,
              0 0 25px #D72020,
              0 0 50px #D72020,
              0 0 100px #D72020;
}
.gren a:hover{
  background: #18d26e;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #18d26e,
              0 0 25px #18d26e,
              0 0 50px #18d26e,
              0 0 100px #18d26e;
}
.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #18d26e);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #18d26e);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #18d26e);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #18d26e);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
</style>

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

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.10.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

<!--    
<div class="menu-box" style="position: fixed; top: 20; right: 20;">
     
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

</div> -->
      
  <main id="main">

  <div class="login-box">
    <div class="ktl">
  <div class="red">
      <a style="color:white;" href="index.php">
     
         X 

      </a>
    </div>
</div>
  <h2 >Give Your Testimony</h2>
  <form action="testis.php" method="POST" enctype="multipart/form-data">
    <div class="user-box">
      <input type="text" name="nama" required>
      <label>Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="job" required>
      <label>Job/Relation</label>
    </div>
    <div >
    <div>
    <label>Photo</label>
    </div>
    <input type="file" name="file_ijazah" required>
    </div>
</br>
    <div class="user-box">
    <textarea type="text" name="testi" rows="4" required></textarea>
    <label>Testimony</label>
    <div>
    <div class="gren">
      <a href="testis.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input  type="submit" name="upload" value="Submit" >
      </a>
    </div>
    
  </form>
</div>

  </main><!-- End #main -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
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
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
</body>

</html>

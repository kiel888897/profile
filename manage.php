<?php

include('konek.php');
//Code Deletion
if(isset($_GET['del']))
{
$sid=$_GET['id'];	
$file=$_GET['file'];
$foto="assets/img/testimonials/$file";
unlink($foto);
$sql    =mysqli_query($conn,"delete from testimoni where id = '$sid'");
if($sql){
echo '<script type ="text/JavaScript">';  
echo 'alert("Testimony has been delete.")';  
echo '</script>'; 
echo '<script type ="text/JavaScript">window.location.href="./manage.php"</script>';
}
}


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

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-12">
            <h2 class="portfolio-title">List broh</h2>
			<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Nama</th>
												<th>Jobs</th>
												<th>Photo</th>
												<th>Testi</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
<?php
$sql=mysqli_query($conn,"select * from testimoni ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['nama'];?></td>
												<td class="hidden-xs"><?php echo $row['job'];?></td>
												<td class="hidden-xs"><?php echo $row['foto'];?></td>
												<td class="hidden-xs"><?php echo $row['pesan'];?></td>
												</td>
												
												<td  >
												
													<a href="manage.php?id=<?php echo $row['id']?>&file=<?php echo $row['foto']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove">Del</a>
												
												</td>
											</tr>
											
											<?php 
$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
									</table>

            

          </div>

          

        </div>

      </div>
    </div><!-- End Portfolio Details -->

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

</body>

</html>
<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
//Code for Update the Content

  	if(isset($_POST['submit']))
  {
   
$namas=$_POST['nama'];
$submain=$_POST['submain'];
$email=$_POST['email'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];
$pos=$_POST['pos'];
$domain=$_POST['domain'];
$ekstensi_diperbolehkan    = array('jpg','png','jpeg');
$nama    = $_FILES['file_baner']['name'];
$x        = explode('.', $nama);
$ekstensi    = strtolower(end($x));
$ukuran        = $_FILES['file_baner']['size'];
$file_tmp    = $_FILES['file_baner']['tmp_name']; 
if($nama==""){
	$query=mysqli_query($con,"update perusahaan set nama='$namas',submain='$submain',email='$email',telp='$telp',alamat='$alamat',pos='$pos',domain='$domain' ");
	echo '<script>alert("Perusahaan has been updated.")</script>';
}else if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
	if($ukuran < 5044070){ 
		move_uploaded_file($file_tmp, '../aset/logo/'.$nama);
     $query=mysqli_query($con,"update perusahaan set nama='$namas',submain='$submain',email='$email',telp='$telp',alamat='$alamat',pos='$pos',domain='$domain', logo='$nama'  ");
    if ($query) {
		echo '<script>alert("Perusahaan has been updated.")</script>';
                }
                else{
					echo '<script>alert("FILE GAGAL DI UPLOAD!")</script>';
                }
            }
            else{
				echo '<script>alert("UKURAN FILE TERLALU BESAR!")</script>';
            }
        }
        else{
			echo '<script>alert("EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!")</script>';
    }
 
  }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Perusahaan </title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				

					<?php include('include/header.php');?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin  | Update Perusahaan</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin </span>
									</li>
									<li class="active">
										<span>Update Perusahaan</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <?php
                
$ret=mysqli_query($con,"select * from  perusahaan");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                
					<div class="form-group">
                       <label for="exampleInputUsername1">Nama Perusahaan</label>
                      <input id="pagetitle" name="nama" type="text" class="form-control" required="true" value="<?php  echo $row['nama'];?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputUsername1">Moto</label>
					  <input class="form-control" name="submain" value="<?php  echo $row['submain'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
					  <input class="form-control" name="email" value="<?php  echo $row['email'];?>">
					</div>
					<div class="form-group">
                      <label for="exampleInputUsername1">Telepon</label>
					  <input class="form-control" name="telp" value="<?php  echo $row['telp'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Alamat</label>
					  <input class="form-control" name="alamat" value="<?php  echo $row['alamat'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Pos</label>
					  <input class="form-control" name="pos" value="<?php  echo $row['pos'];?>">
                    </div>
					<div class="form-group">
							
							<label for="exampleInputEmail1">
								
							Logo
							</label>
							
							<input  type="file" name="file_baner" class="custom-file-input" >
							<smalltext><?php  echo $row['logo'];?> </smalltext>
							
							
						</div>
                    <!--<div class="form-group">
                      <label for="exampleInputUsername1">Logo Footer</label>
					  <input  type="file" name="logo2" class="custom-file-input" >
					  <smalltext><?php  echo $row['logo2'];?> </smalltext>
                    </div>-->
                    <div class="form-group">
                      <label for="exampleInputUsername1">Domain</label>
					  <input class="form-control" name="domain" value="<?php  echo $row['domain'];?>">
                    </div>
					
                    
                    <?php } ?>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
								</div>
							</div>
								</div>
						
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
<?php } ?>

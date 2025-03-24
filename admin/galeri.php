<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
	if($_POST['upload']){
        $nomor    = $_POST['nomor'];
        $jenis    = $_POST['jenis'];
		
		$rand = rand();
        $ekstensi_diperbolehkan    = array('jpg','png','mp4','jpeg','gif');
        $nama    = $_FILES['file_ijazah']['name'];
        $x        = explode('.', $nama);
        $ekstensi    = strtolower(end($x));
        $ukuran        = $_FILES['file_ijazah']['size'];
        $file_tmp    = $_FILES['file_ijazah']['tmp_name']; 
     
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 500044070){ 
                move_uploaded_file($file_tmp, '../aset/galeri/'.$rand.'_'.$nama);
				$file_gambar = $rand.'_'.$nama;
                $sql    = mysqli_query($con,"INSERT INTO galeri VALUES(NULL, '$nomor','$jenis', '$file_gambar')");
                if($sql){
					
				$_SESSION['msg']="Galeri BERHASIL DI UPLOAD!";
                }
                else{
					$_SESSION['msg']="Galeri GAGAL DI UPLOAD!";
                }
            }
            else{
				$_SESSION['msg']="UKURAN FILE TERLALU BESAR!";
            }
        }
        else{
			$_SESSION['msg']="EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!";
        }
    }

//Code Deletion
if(isset($_GET['del']))
{
$sid=$_GET['id'];	
$data = mysqli_query($con, "select * from galeri where id='$id'");
$d = mysqli_fetch_assoc($data);
$dokumen = $d['file'];
unlink("../aset/galeri/$dokumen");
mysqli_query($con,"delete from galeri where id = '$sid'");
$_SESSION['msg']="data deleted !!"  ;
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Galeri</title>
	
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
									<h1 class="mainTitle">Admin | Add Galeri</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Galeri</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-6 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title center">Tambah Galeri</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
								<form action="galeri.php" method="POST" enctype="multipart/form-data">
														
														<div class="form-group">
															<label for="exampleInputEmail1">
															Nama 
															</label><br>
															<input type="text" class="form-control"  name="nomor">
														</div>
														<div class="form-group">
															<label for="exampleInputEmail1">
															Jenis 
															</label><br>
															<select class="form-control" name="jenis" >
																<option value=""> --Jenis Galeri--</option>
																<option value="foto">Foto</option>
																<option value="video">Video</option>
															</select>
														</div>
														<div class="form-group">	
															<label for="exampleInputEmail1">
																
															File
															</label>
                											<input type="file" name="file_ijazah">
															
														</div>
												
														<input  type="submit" name="upload" value="Upload" class="btn btn-o btn-primary">
												
</input>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Informasi <span class="text-bold">Dokumen</span></h5>
									
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Nama</th>
												<th>Jenis</th>
												<th>Dokumen</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
												<?php
												$sql=mysqli_query($con,"select * from galeri");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
												{
												?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['nama'];?></td>
												<td class="hidden-xs"><?php echo $row['jenis'];?></td>
												<td class="hidden-xs"><a target="blank" href="../aset/galeri/<?php echo $row['file'];?>">Lihat</a></td>
												</td>
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
						<!--	<a href="edit-jadwal.php?id=<?php echo $row['id'];?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
												-->					
													<a href="galeri.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group" dropdown is-open="status.isopen">
														<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
															<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
														</button>
														<ul class="dropdown-menu pull-right dropdown-light" role="menu">
															<li>
																<a href="#">
																	Edit
																</a>
															</li>
															<li>
																<a href="#">
																	Share
																</a>
															</li>
															<li>
																<a href="#">
																	Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											
											<?php 
$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
									</table>
								</div>
							</div>
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

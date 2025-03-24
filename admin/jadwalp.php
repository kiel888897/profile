<?php
//session_start();
//error_reporting(0);
include('include/config.php');
function tgl_indo($tanggal){
	$bulan = array (
		1 =>     'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
  
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  }
//if(strlen($_SESSION['id']==0)) {
// header('location:logout.php');
 // } else{

if(isset($_POST['upload']))
{
$nama=$_POST['nama'];
$tgl=$_POST['tgl'];
$ket=$_POST['ket'];
$sql=mysqli_query($con,"insert into jadwal(nama,tgl,ket) values('$nama','$tgl','$ket')");
echo '<script>alert("Jadwal berhasil di tambahkan !!.")</script>';
//$_SESSION['msg']="Jadwal berhasil di tambahkan !!";

}
//Code Deletion
if(isset($_GET['del']))
{
$sid=$_GET['id'];	
mysqli_query($con,"delete from jadwal where id = '$sid'");
?><script>
	alert("data deleted !!");
	window.location="../../informasi.php";
	</script><?php
//echo '<script>alert("data deleted !!.")</script>';
//$_SESSION['msg']="data deleted !!";
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
	
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
		<div class="container-fluid container-fullw bg-white">
			<div class="row">
				<div class="col-md-12">
					<div class="row margin-top-30">
						<div class="col-lg-6 col-md-12">
							<div class="panel panel">
								<div class="panel-heading">
									<br>
									<h5 class="panel-title center">Isi Jadwal Kegiatan</h5>
								</div>
								<div class="panel-body">
									<form role="form" name="dcotorspcl" method="post" >
														<div class="form-group">
															<label for="exampleInputEmail1">
															Nama
															</label>
															<input type="text" name="nama" class="form-control"  placeholder="Nama Kegiatan">
														</div>
														<div class="form-group">	
															<label for="exampleInputEmail1">
															Tanggal
															</label>
															<input class="form-control datepicker" name="tgl"  required="required" data-date-format="dd-mm-yyyy" placeholder="Tanggal"> 
					
														</div>
														<div class="form-group">	
															<label for="exampleInputEmail1">
															Keterangan
															</label>
															<input type="text" name="ket" class="form-control"  placeholder="Keterangan">
														</div>
												
														
														
														
														<button type="submit" name="upload" class="btn btn-o btn-primary">
															Submit
														</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr><hr>
			<div class="row">
				<div class="col-md-12">
					<h5 class="over-title margin-bottom-15">Informasi <span class="text-bold">Jadwal Kegiatan</span></h5>
					<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Nama</th>
												<th>Tanggal</th>
												<th>Keterangan</th>
												
												<!--<th class="hidden-xs">Creation Date</th>
												<th>Updation Date</th>-->
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
											<?php

											$sql=mysqli_query($con,"select * from jadwal");
											$cnt=1;
											while($row=mysqli_fetch_array($sql))
											{
											?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['nama'];?></td>
												<td><?php echo $row['tgl'];?></td>
												<td class="hidden-xs"><?php echo $row['ket'];?></td>
												</td>
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<!--<a href="edit-jadwal.php?id=<?php echo $row['id'];?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i>Edit</a>
											-->
													<a href="kjkn/admin/jadwalp.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i>Hapus</a>
												</div>
												
											</td>
											</tr>
											
											<?php 
												$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
					</table>
				</div>
			</div></div>
						
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
<?php// } ?>

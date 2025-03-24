<?php
//session_start();
//error_reporting(0);
include('include/config.php');
//if(strlen($_SESSION['id']==0)) {
 //header('location:logout.php');
 // } else{
//Code for Update the Content

if(isset($_POST['submit']))
  {
   
     $pagetitle=$_POST['pagetitle'];
$pagedes=$_POST['pagedes'];
 $lisensi=$_POST['lisensi'];
 $rekening=$_POST['rekening'];
  $npwp=$_POST['npwp'];
  $domisili=$_POST['domisili'];
  $surat=$_POST['surat'];
  $website=$_POST['website'];
  $aktalsp=$_POST['aktalsp'];
  $aktaasosiasi=$_POST['aktaasosiasi'];
  $rekom=$_POST['rekom'];
  $dewan=$_POST['dewan'];
  $pelaksana=$_POST['pelaksana'];
  $komite=$_POST['komite'];
  $asesor=$_POST['asesor'];
  $penanggung=$_POST['penanggung'];
  $staf=$_POST['staf'];
  $teknis=$_POST['teknis'];
  $terveri=$_POST['terveri'];
  $kantor=$_POST['kantor'];
  
  $Email=$_POST['Email'];
     $query=mysqli_query($con,"update tblpage set PageTitle='$pagetitle',PageDescription='$pagedes',Email='$Email',PageDescription2='$lisensi',Email2='$rekening',npwp='$npwp',domisili='$domisili',surat='$surat',web='$website'
	 ,aktalsp='$aktalsp'
	 ,aktaasosiasi='$aktaasosiasi'
	 ,rekom='$rekom'
	 ,dewan='$dewan'
	 ,pelaksana='$pelaksana'
	 ,komite='$komite'
	 ,asesor='$asesor'
	 ,penanggung='$penanggung'
	 ,staf='$staf'
	 ,teknis='$teknis'
	 ,terveri='$terveri'
	 ,kantor='$kantor' where  PageType='legitimasi'");
    if ($query) {
 
    echo '<script>alert("Legalitas has been updated.")</script>';
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
  
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
		  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	</head>
	<body>
		<div class="container-fluid container-fullw bg-white">
			<div class="row">
				<div class="col-md-12">
					<form class="forms-sample" method="post">
                    <?php
						$ret=mysqli_query($con,"select * from  tblpage where PageType='legitimasi'");
						$cnt=1;
						while ($row=mysqli_fetch_array($ret)) {

						?>
						</br>
                    <div class="form-group">
                       <label for="exampleInputUsername1">Nama Lembaga</label>
					   <input id="pagetitle" name="pagetitle" type="text" class="form-control" required="true" value="<?php  echo $row['PageTitle'];?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputUsername1">SK Lisensi dan Sertifikat Lisensi</label>
					  <textarea class="form-control" name="lisensi" id="lisensi" rows="12"><?php  echo $row['PageDescription2'];?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor SK Pendirian LSP(Pihak 1 dan 2)</label>
					  <textarea class="form-control" name="pagedes" id="pagedes" rows="12"><?php  echo $row['PageDescription'];?></textarea>
					  <!--<input class="form-control datepicker" name="pagedes"  required="required" data-date-format="yyyy-mm-dd" value="<?php  echo $row['PageDescription'];?>"> -->
					</div>
					<div class="form-group">
                      <label for="exampleInputUsername1">Bentuk Badan Hukum LSP (Untuk LSP P3)</label>
					  <textarea class="form-control" name="Email" id="Email" rows="12"><?php  echo $row['Email'];?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Akta Notaris LSP dan Registrasi Kemenkumham (Pihak 3)</label>
					  <textarea class="form-control" name="aktalsp" id="aktalsp" rows="12"><?php  echo $row['aktalsp'];?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Akta Notaris Asosiasi Pendiri Dan Registrasi Kemenkumham (Pihak 3)</label>
					  <textarea class="form-control" name="aktaasosiasi" id="aktaasosiasi" rows="12"><?php  echo $row['aktaasosiasi'];?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Surat Rekomendasi Dari Pembina Sektor (Pihak 3)</label>
					  <textarea class="form-control" name="rekom" id="rekom" rows="12"><?php  echo $row['rekom'];?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Sk Penetapan Dewan Pengarah</label>
					  <textarea class="form-control" name="dewan" id="dewan" rows="12"><?php  echo $row['dewan'];?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Sk Penetapan Pelaksana LSP</label>
					  <textarea class="form-control" name="pelaksana" id="pelaksana" rows="12"><?php  echo $row['pelaksana'];?></textarea>
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputUsername1">Sk Penatapan Komite Skema LSP</label>
					  <textarea class="form-control" name="komite" id="komite" rows="12"><?php  echo $row['komite'];?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Sk Penetapan Asesor Kompetensi</label>
					  <textarea class="form-control" name="asesor" id="a" rows="asesor"><?php  echo $row['asesor'];?></textarea>
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputUsername1">Sk Penetapan Penanggung Jawab TUK</label>
					  <textarea class="form-control" name="penanggung" id="penanggung" rows="12"><?php  echo $row['penanggung'];?></textarea>
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputUsername1">Sk Penetapan Staf LSP (Jumlah Staff LSP Sesuai Sk)</label>
					  <textarea class="form-control" name="staf" id="staf" rows="12"><?php  echo $row['staf'];?></textarea>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1">Nomor NPWP LSP</label>
                     <input type="text" class="form-control" name="npwp" value="<?php  echo $row['npwp'];?>" required='true' maxlength="105">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Sk Persyaratan Teknis Tuk Perskema Dan Per Metode Uji</label>
					  <textarea class="form-control" name="teknis" id="teknis" rows="12"><?php  echo $row['teknis'];?></textarea>
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputUsername1">Sebaran Tuk Terverifikasi (Berdasarkan Provinsi Daerah) Untuk LSP P3</label>
					  <textarea class="form-control" name="terveri" id="terveri" rows="12"><?php  echo $row['terveri'];?></textarea>
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputUsername1">Sk Penetapan Kantor LSP</label>
					  <textarea class="form-control" name="kantor" id="kantor" rows="12"><?php  echo $row['kantor'];?></textarea>
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nomor Rekening</label>
                     <input type="text" class="form-control" name="rekening" value="<?php  echo $row['Email2'];?>" required='true' maxlength="105" >
                    </div>
					<div class="form-group">
                      <label for="exampleInputUsername1">SK Domisili</label>
                     <input type="text" class="form-control" name="domisili" value="<?php  echo $row['domisili'];?>" required='true' maxlength="105">
                    </div>
					<div class="form-group">
                      <label for="exampleInputUsername1">Alamat Surat</label>
                     <input type="text" class="form-control" name="surat" value="<?php  echo $row['surat'];?>" required='true' maxlength="105">
                    </div>
					<div class="form-group">
                      <label for="exampleInputUsername1">Website</label>
                     <input type="text" class="form-control" name="website" value="<?php  echo $row['web'];?>" required='true' maxlength="105">
                    </div>
                    
                    <?php } ?>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
                  </form>
				  <br>
				</div>
			</div>
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
<?php //} ?>

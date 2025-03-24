<?php 
$data = mysqli_query($con, "select * from perusahaan ");
$d = mysqli_fetch_assoc($data);
$nama = $d['nama'];
$email = $d['email'];
$telp = $d['telp'];
$alamat = $d['alamat'];
$pos = $d['pos'];
$submain = $d['submain'];
$logo = $d['logo'];
$logo2 = $d['logo2'];
$web = $d['domain'];
?>
<footer>
				<div class="footer-inner">
					<div class="pull-left">
					<span class="text-bold text-uppercase"> <?php echo $nama ;?></span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>
<?php
//session_start();
//error_reporting(0);
//include('include/config.php');
//if(strlen($_SESSION['id']==0)) {
 //header('location:logout.php');
 // } else{
//Code for Update the Content

  	if(isset($_POST['submit']))
  {
   
     $pagetitle=$_POST['pagetitlet'];
$pagedes=$con->real_escape_string($_POST['pagedest']);
     $query=mysqli_query($con,"update tblpage set PageTitle='$pagetitle',PageDescription='$pagedes'  where  PageType='tujuan'");
    if ($query) {
 
    echo '<script>alert("Tujuan has been updated.")</script>';
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
		  <script src="assets/js/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	</head>
	<body>
		<div class="container-fluid container-fullw bg-white">
			<div class="row">
				<div class="col-md-12">
					<form class="forms-sample" method="post">
                    <?php
										
						$ret=mysqli_query($con,"select * from  tblpage where PageType='tujuan'");
						$cnt=1;
						while ($row=mysqli_fetch_array($ret)) {

						?>

						<br>
                    <div class="form-group">
                       <label for="exampleInputUsername1">Title</label>
                      <input id="pagetitle" name="pagetitlet" type="text" class="form-control" required="true" value="<?php  echo $row['PageTitle'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea style="width:960px;" class="form-control" name="pagedest" id="pagedest" rows="12"><?php  echo $row['PageDescription'];?></textarea>
                    </div>
					<?php } ?>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
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

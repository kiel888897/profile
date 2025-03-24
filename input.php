<?php
include_once('admin/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} 
?>
 <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
 <form method="post"  >
                <div class="form-group mt-3">
                  <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nama" required="">
                </div>
<br>
              <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="mobileno" id="mobileno" placeholder="Telephon/Whatsapp" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Email" required="">
                </div>
                
              </div>
             
              <div class="form-group mt-3">
                <textarea class="form-control" name="description" rows="7" placeholder="Pesan" required=""></textarea>
              </div>
              <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
              <br>
              <div class="text-center"><button class="appointment-btn scrollto" type="submit" name="submit"><span class="d-none d-md-inline">Kirim</span> </button></div>
              <br>
            <p class="text-info">* Kami akan menghubungi Anda melalui telepon & email nanti</p>
            </form>
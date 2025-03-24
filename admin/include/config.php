<?php
define('DB_SERVER','192.168.18.105');
define('DB_USER','wikan37_wisatamu');
define('DB_PASS' ,'15ap0aZ3d1IW1Gbd8PddFtdrAGdj6A');
define('DB_NAME', 'wisatamu_db');
define('DB_PORT', 33421);
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME,DB_PORT);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<html>
<head>
    <title>Tutorial Cara Membuat Upload File Dengan PHP MySQL</title>
</head>
<body>
    <h1>Form Upload File Dengan PHP</h1>
    <?php 
include('include/config.php');
    if($_POST['upload']){
        $nomor    = $_POST['nomor'];
        $ekstensi_diperbolehkan    = array('jpg','png','pdf','docx');
        $nama    = $_FILES['file_ijazah']['name'];
        $x        = explode('.', $nama);
        $ekstensi    = strtolower(end($x));
        $ukuran        = $_FILES['file_ijazah']['size'];
        $file_tmp    = $_FILES['file_ijazah']['tmp_name']; 
     
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){ 
                move_uploaded_file($file_tmp, 'aset/'.$nama);
                $sql    = mysqli_query($con,"INSERT INTO dokumen VALUES(NULL, '$nomor', '$nama')");
                if($sql){
                    echo 'FILE BERHASIL DI UPLOAD!';
                }
                else{
                    echo 'FILE GAGAL DI UPLOAD!';
                }
            }
            else{
                echo 'UKURAN FILE TERLALU BESAR!';
            }
        }
        else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!';
        }
    }
    ?> 
    <br/>
    <br/>
    <a href="./">Kembali</a>
    <br/>
    <br/> 
    <table>
        <?php 
            $data = mysql_query($con,"SELECT * FROM dokumen");
            while($row = mysql_fetch_array($data)){
        ?>
        <tr>
            <td><a href="assets/dokumen/<?php echo $row['dok'];?>">Lihat File</a></td> 
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
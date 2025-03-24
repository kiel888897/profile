<?php
require_once('konek.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6LdLo6spAAAAAFWNNIpWx0lLby3b0DUO9wnndIE0';
$recaptcha_response = $_POST['recaptcha_token'];

$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
$recaptcha = json_decode($recaptcha);

if ($recaptcha->success && $recaptcha->action == 'contact_form' && $recaptcha->score >= 0.5) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Periksa apakah semua field formulir tidak kosong
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Query untuk menyimpan data ke dalam database
        $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
       
        // Jalankan query
        if (mysqli_query($conn, $sql)) {
            // Jika data berhasil disimpan, kirim email
            $mail = new PHPMailer(true);
            try {
                // Pengaturan SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.kiel.my.id'; // Sesuaikan dengan host SMTP dari penyedia email Anda
                $mail->SMTPAuth = true;
                $mail->Username = 'info@kiel.my.id'; // Sesuaikan dengan username email Anda
                $mail->Password = 'Kiel@0804'; // Sesuaikan dengan password email Anda
                $mail->SMTPSecure = 'ssl'; // Sesuaikan dengan pengaturan SSL atau TLS
                $mail->Port = 465; // Sesuaikan dengan port SMTP dari penyedia email Anda

                // Pengaturan email
                $mail->setFrom('info@kiel.my.id', 'Yehezkiel');
                $mail->addAddress($email); // Penerima email
                $mail->addCC('info@kiel.my.id'); // Salin pesan ke alamat info@kiel.my.id
                $mail->addCC('yehezkielgg@gmail.com'); // Salin pesan ke alamat info@kiel.my.id
                $mail->Subject = 'Konfirmasi Pesan Anda';
                $mail->Body = "Thank you for contacting us. Your message has been received.\n\n" .
                "Name: " . $name . "\n\n" .
                "Email: " . $email . "\n\n" .
                "Subject: " . $subject . "\n\n" .
                "Message: " . $message;

                // var_dump($mail); // Tambahkan var_dump untuk memeriksa nilai-nilai konfigurasi PHPMailer

                // Kirim email
                $mail->send();
                echo 'OK';
               
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            // Jika terjadi kesalahan, tampilkan pesan error
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Semua field harus diisi.";
    }
} else {
    echo "Verifikasi reCAPTCHA gagal. Silakan coba lagi.";
}
?>

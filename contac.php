<?php
require_once('konek.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Verifikasi Google reCAPTCHA
$secretKey = '6LcaBIgpAAAAAEpvKDBrPRq1gZur9jhUTLRzLIGy'; // Ganti dengan secret key reCAPTCHA Anda
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey");
$responseKeys = json_decode($response, true);

// Periksa apakah verifikasi reCAPTCHA berhasil
if ($responseKeys["success"]) {
    // Ambil data yang dikirimkan melalui formulir
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
            echo 'OK';
            // Jika data berhasil disimpan, kirim email
            $mail = new PHPMailer(true);
            try {
                // Pengaturan SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'kiel888897@gmail.com';
                $mail->Password = 'Yehezkiel0804';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Pengaturan email
                $mail->setFrom('kiel888897@gmail.com', 'Yehezkiel');
                $mail->addAddress($email); // Penerima email
                $mail->Subject = 'Konfirmasi Pesan Anda';
                $mail->Body = "Thank you for contacting us. Your message has been received.\n\nMessage:\n\n" . $message;

                // Kirim email
                $mail->send();
               
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

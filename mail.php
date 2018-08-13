<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'mail.smtp2go.com';
$mail->SMTPAuth = true;
$mail->Username = 'zikazama';
$mail->Password = 'FRGwRK3zcUmY';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('info@contoh.com', 'Codingan');
$mail->addReplyTo('info@contoh.com', 'Codingan');
// Menambahkan penerima
$mail->addAddress('penerima@contoh.com');
// Menambahkan cc atau bcc 
$mail->addCC('cc@contoh.com');
$mail->addBCC('bcc@contoh.com');
// Subjek email
$mail->Subject = 'Kirim Email via SMTP Server di PHP menggunakan PHPMailer';
// Mengatur format email ke HTML
$mail->isHTML(true);
// Konten/isi email
$mailContent = "<h1>Mengirim Email HTML menggunakan SMTP di PHP</h1>
    <p>Ini adalah email percobaan yang dikirim menggunakan email server SMTP dengan PHPMailer.</p>";
$mail->Body = $mailContent;
// Kirim email
if(!$mail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}
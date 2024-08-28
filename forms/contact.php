
<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp-mail.outlook.com';
$mail->SMTPAuth = true;
$mail->Username = 'jrogge@outlook.com';
$mail->Password = 'Loputo2105';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From = 'jrogge@outlook.com';
$mail->FromName = $_POST['name'];
$mail->addAddress($receiving_email_address, 'Receipient Name');

$mail->isHTML(true);

$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];


$receiving_email_address = 'jrogge@outlook.com';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp-mail.outlook.com';
$mail->SMTPAuth = true;
$mail->Username = 'jrogge@outlook.com';
$mail->Password = 'Loputo2105';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From = 'jrogge@outlook.com';
$mail->FromName = $_POST['name'];
$mail->addAddress($receiving_email_address, 'Receipient Name');

$mail->isHTML(true);

$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>

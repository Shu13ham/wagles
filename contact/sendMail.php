<?php 
 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require '../contact/PHPMailer/Exception.php'; 
require '../contact/PHPMailer/PHPMailer.php'; 
require '../contact/PHPMailer/SMTP.php'; 
 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
$mail = new PHPMailer; 
// $mail->SMTPDebug = 2;
$mail->isSMTP();                      // Set mailer to use SMTP
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);   
$mail->Host = 'localhost';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = false;               // Enable SMTP authentication 
// $mail->Username = '';   // SMTP username 
$mail->SMTPSecure = none;            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 25;                    // TCP port to connect to 
 
 
// Sender info 
$mail->setFrom("$email", "$name");
 
// Add a recipient 
$mail->addAddress('contact.wagles@gmail.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = $subject; 
 
// Mail body content ?
$bodyContent = "$message <br> <br>"; 
$bodyContent .= "From: $email <br> <br>"; 
$mail->Body = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo "<script type='text/javascript'>alert('Message could not be sent. Mailer Error');</script>";
} else { 
    echo "<script type='text/javascript'>alert('Message has been sent..!');</script>"; 
} 
 
header("Location: ./index.php");
?>
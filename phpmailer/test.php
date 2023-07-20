<?php
  error_reporting(0);

    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

$your_email = "towmatovft@gmail.com";
$your_smtp = "smtp.gmail.com";
$your_smtp_user = "towmatovft@gmail.com";
$your_smtp_pass = "efybkxygmzbxfqgr";


//get contact form details
$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['message'];

$response="Email: $email\n Name: $name\n Contents: $comments\n";

$mail = new PHPmailer();
$mail->From = $email;
$mail->FromName = "mehmon";
$mail->Host = $your_smtp;
$mail->Mailer   = "smtp";
$mail->Password = $your_smtp_pass;
$mail->Username = $your_smtp_user;
$mail->Subject = "Info";
$mail->SMTPAuth  =  "true";
$mail->Body = $response;
$mail->AddAddress($your_email);
$mail->AddReplyTo($email);


if ($mail->Send()) {
echo "send";
}
else {
    echo false;
}


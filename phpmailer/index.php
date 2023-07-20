<?php
  error_reporting(0);

    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

define ('GUSER','towmatovft@gmail.com');
define ('GPWD','efybkxygmzbxfqgr');

$name       = $_POST['name'];
$mailfrom   = $_POST['email'];
$context    = $_POST['message'];

$subject    = 'Information';
$to         = "towmatovft@gmail.com"; // injayam alish kuned

smtpmailer($mailfrom, $name, $subject, $context);

$from = $mailfrom ;


function smtpmailer($from, $name, $subject, $context) {
    global $error;
    $mail = new PHPMailer();                    

    $mail->isSMTP();                           
    $mail->Host      = 'smtp.gmail.com';        
    $mail->SMTPAuth  = true;                                        
    $mail->isHTML(true);                        
    
    
    $mail->Username = GUSER;                    
    $mail->Password = GPWD;                     
    
    $mail->SMTPSecure   = 'tls';                
    $mail->Port         = 587;                 

    $mail->setFrom($from,$name);            
    $mail->addAddress('towmatovft@gmail.com');          // injaya alish kuned!!!

    $mail->Subject = $subject;
    $mail->Body    = $context;
    
   if($mail->Send()) {
       echo "send";
    } 
    else {
        
        echo "error";
    }
}
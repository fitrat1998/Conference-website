<?php
session_start();
require_once "db.php";

error_reporting(0);

require "../../phpmailer/includes/PHPMailer.php";
require "../../phpmailer/includes/SMTP.php";
require "../../phpmailer/includes/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_SESSION['check'] == "true") {

$your_email = "towmatovft@gmail.com";
$your_smtp = "smtp.gmail.com";
$your_smtp_user = "towmatovft@gmail.com";
$your_smtp_pass = "efybkxygmzbxfqgr";

$email = $_POST["email"];

$sql = mysqli_query($link, "SELECT * FROM users WHERE email = '$email'");
$rows = mysqli_fetch_assoc($sql);

if($rows['email'] != $email) {
    echo "The email does not exits in users list. Please enter valid email address";
    exit();
}

if ($rows && !empty($email)) {
    $time = time();
    $code = uniqid();
    echo "inserted";
    $sql2 = mysqli_query(
        $link,
        "INSERT INTO reset_password(email,time,code) 
                                       VALUES ('$email','$time','$code')"
    );

    $response = "Your confirmation code : $code\n
     Link for reseting password: sism.samdu.uz/account/resetpass/update_password.php \n";

    $mail = new PHPmailer();
    $mail->From = $email;
    $mail->FromName = "SISM 2023";
    $mail->Host = $your_smtp;
    $mail->Mailer = "smtp";
    $mail->Password = $your_smtp_pass;
    $mail->Username = $your_smtp_user;
    $mail->Subject = "Reset password";
    $mail->SMTPAuth = "true";
    $mail->Body = $response;
    $mail->AddAddress($email);

    if ($mail->Send()) {
    } 
    else {
        echo "error sending";
    }
} 
else {
    echo "string";
}

}
else {
    exit();
}
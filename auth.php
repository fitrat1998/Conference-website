<?php
	
	include'config.php';
	error_reporting(0);

    require 'phpmailer/includes/PHPMailer.php';
    require 'phpmailer/includes/SMTP.php';
    require 'phpmailer/includes/Exception.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

		if(!empty($_POST['deegre'])) trim($deegre = $_POST['deegre']); 
		else  die("Error1");


		if(!empty($_POST['email'])) trim($email = $_POST['email']);
	    else  die("Error3");

		if(!empty($_POST['l_name'])) trim( $l_name = $_POST['l_name']);
		else  die("Error4");

		if(!empty($_POST['f_name'])) trim(  $f_name = $_POST['f_name']);
		else die("Error5");

		if(!empty($_POST['visa'])){
			if($_POST['visa']=="true") $visa = true;
			else $visa = 0;
		}
		else die("Error6");
 		
 		if(!empty($_POST['extra'])){
 			if($_POST['extra']=="true") $extra = true;
			else $extra = 0;
 		}
		else  die("Error7");

		if(!empty($_POST['country'])) trim($country = $_POST['country']);
		else  die("Error8");

		if(!empty($_POST['zipcode']))  trim($zipcode = $_POST['zipcode']);
		else die("Error9");

		if(!empty($_POST['address'])) trim($address = $_POST['address']);
		else  die("Error10");

		if(!empty($_POST['company'])) trim($company = $_POST['company']);
		else  die("Error11");

		if(!empty($_POST['city']))  trim($city = $_POST['city']);
		else die("Error12");

		if(!empty($_POST['phone'])) trim($phone = $_POST['phone']);
		else  die("Error13");

		if(!empty($_POST['title_paper'])) trim($title_paper = $_POST['title_paper']);
		else  die("Error15");

		if(!empty($_POST['type_paper'])) trim($type_paper = $_POST['type_paper']);
		else die("Error16");

		if(!empty($_POST['subject']))  $subject = $_POST['subject'];
		else  die("Error17");

		if(!empty($_POST['password']))  $password = md5($_POST['password']);
		else  die("Error18");

		if(!empty($_POST['arriving']))  $arriving = $_POST['arriving'];
		else  die("Error19");

		if(!empty($_POST['departing']))  $departing = $_POST['departing'];
		else  die("Error20");

        $exists = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $rows = mysqli_fetch_assoc($exists);


        if($rows['password'] == $password ) {
        	echo "exists";
        	exit();
        }
        else {


		$sql = "INSERT INTO users 
		(deegre,email,last_name,first_name,visa,accompaning,country,

		zip,address,company,city,phone,title,type,subject,password,arriving,departing)

		VALUES('$deegre','$email','$l_name','$f_name','$visa','$extra','$country',

		'$zipcode','$address','$company','$city','$phone','$title_paper','$type_paper','$subject',
		'$password','$arriving','$departing')";

		$res = mysqli_query($con,$sql);
              
			if($res) {  
						$your_email = "towmatovft@gmail.com";
						$mism = "mism@magn.ru";
						$alex = "gran60@mail.ru";
						$smaysara = "smaysara@yandex.ru";
						$your_smtp = "smtp.gmail.com";
						$your_smtp_user = "towmatovft@gmail.com";
						$your_smtp_pass = "efybkxygmzbxfqgr";

						$recivers = array($your_email,$email);

						 
						
						$login = $_POST['email'];
						$parol = $_POST['password'];
						$comments = "Thank you for registring";

						$response="Dear $f_name $l_name your login: $login\n Your password: $parol\n Contents: $comments\n";

						$mail = new PHPmailer();
						$mail->From = $email;
						$mail->FromName = "SISM 2023";
						$mail->Host = $your_smtp;
						$mail->Mailer   = "smtp";
						$mail->Password = $your_smtp_pass;
						$mail->Username = $your_smtp_user;
						$mail->Port = 587;
						$mail->Subject = "Registration finished successfully";
						$mail->SMTPAuth  =  "true";
						$mail->Body = $response;
						foreach ($recivers as $value) {
							$mail->AddAddress($value);
						}
						$mail->AddReplyTo($email);


						if ($mail->Send()) {
						echo "inserted";
						}
						else {
							echo "error sending email";
						}
			        }
			else {
				echo "error inserting";
			}
        }


        		
						$contacts = array($your_email,$alex,$smaysara,$mism);
						
						$response="New user : $f_name $l_name registered.\n Email: $email\n";

						$mail = new PHPmailer();
						$mail->From = $email;
						$mail->FromName = "SISM 2023";
						$mail->Host = $your_smtp;
						$mail->Mailer   = "smtp";
						$mail->Password = $your_smtp_pass;
						$mail->Username = $your_smtp_user;
						$mail->Subject = "Registration notification";
						$mail->SMTPAuth  =  "true";
						$mail->Body = $response;
						foreach ($contacts as $key) {
						$mail->AddAddress($key);
						}
						$mail->AddReplyTo($your_email);


						if ($mail->Send()) {
						
						}
						else {
							echo "error sending mism";
						}

?>
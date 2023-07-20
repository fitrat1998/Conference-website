<?php
    session_start();
	include'../../config.php';

	$_SESSION['salom'] = "Assalam alekum";

	$email = trim($_POST['email']);
	$password = md5($_POST['password']);

$sql = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");

$rows = mysqli_fetch_assoc($sql);

if($email == $rows['email'] && $password = $rows['password']) {
	 echo "loged";
	 $_SESSION['user'] = $rows['first_name'];
	 $_SESSION['email'] = $rows['email'];
	 $_SESSION['password'] = $_POST['password'];
	 $_SESSION['company'] = $rows['company'];
	 $_SESSION['country'] = $rows['country'];
	 $_SESSION['payment_id'] = $rows['id'];
}
else {
	echo "Incorrect login or password";
}


?>
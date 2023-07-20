<?php
	session_start();
	include'../config.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysqli_query($con,"SELECT * FROM rolls WHERE username = '$username' AND password = '$password'");
	$res = mysqli_fetch_assoc($sql);

	if($password==$res['password'] && $username==$username) {
		echo "okay";
		$_SESSION['name'] = $res['name'];
		$_SESSION['roll'] = $res['roll'];
	}
	else {
		if($username != $res['username']) echo "Wrong username";

		else if($password != $res['password']) echo "Wrong password";
		
		else echo "Something went wrong";
	}


?>
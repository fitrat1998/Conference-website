<?php
	session_start();
	if(!$_SESSION['name']) {
		header("Location:login.php");
	}
	else {
		header("Location:dashboard.php");
	}

?>
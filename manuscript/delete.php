<?php
	include'../config.php';

	$id = $_POST['id'];

	if(empty($id)) {
		echo "File doesn't exist!!!";
		exit();
	}
 
 	// error_reporting(0);

	$old = mysqli_query($con,"SELECT file FROM manuscripts WHERE id = '$id'");
	$link = mysqli_fetch_assoc($old);
	$dir = "files/";

	$sql = mysqli_query($con,"DELETE FROM manuscripts WHERE id = '$id'");
     
	if($sql) {
		unlink($dir.$link['file']);
		exit();
	}
	else {
		echo "Something went wrong your file has not deleted!!";
	}
	

?>


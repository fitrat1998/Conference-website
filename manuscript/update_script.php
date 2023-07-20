<?php
include'../config.php';

// print_r($_FILES);
// exit();

    $id = $_POST['id']; 	
 	$dir = "files/";
 	$sql2 = mysqli_query($con,"SELECT file FROM manuscripts WHERE id='$id'");
 	$old = mysqli_fetch_assoc($sql2);

 	$error = array();

 	if(!empty($_POST['first_name']))  $first_name = trim($_POST['first_name']);
 	else $error = "Plese enter your firstname";

 	if(!empty($_POST['last_name']))  $last_name = trim($_POST['last_name']);
 	else $error = "Plese enter your lastname";
 	
    $file_exp = strtolower(end(explode(".", $_FILES['file']['name'])));
    $exp = array("doc","rtf","docx");

    if(!empty($_FILES['file']['name'])){
        $size = $_FILES['file']['size']/1024;
        if($size < 2048) {
            if(in_array($file_exp, $exp)) {
               $file = $_FILES['file']['name'];
               $tmp = $_FILES['file']['tmp_name'];  
            }
 			else {
 				$error = "Your files type must be only like rtf or doc";
 			}
 		}
 		else {
 			$error = "Your file must be less than 2 mb";
 		}
 	}
 	else {
 		$error = "Plese uploade your new file";
 	}

 	if($error) {
 		print_r($error);
 	}
    else {

    $sql = "UPDATE manuscripts SET first_name = '$first_name',last_name = '$last_name',file='$file' 
    WHERE id = '$id'";
 	$res = mysqli_query($con,$sql);

 	if($dir.$old['file']){
	 	if($res){
		    echo "updated";
			move_uploaded_file($tmp, $dir.$file);
			unlink($dir.$old['file']);
			die();
	 	}
	 	else {
	 		$error = "error updating";
	 	}
	 }
	 else{
	 	$error = "error path";
	 }

print_r($error);
}
 
?>